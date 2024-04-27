<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        $data = Admin::latest()->paginate(5);
        return view('Admin.Admins.index',compact('data'));
    }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('Admin.Admins.create',compact('roles'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles_name' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $admin = Admin::create($input);
        $admin->assignRole($request->input('roles'));

        return redirect()->route('admin.admins.index')
            ->with('success','Admin created successfully');
    }

    public function show(string $id)
    {
        //
    }


    public function edit($id)
    {
        $admin = Admin::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $admin->roles->pluck('name','name')->all();

        return view('Admin.Admins.edit',compact('admin','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $admin = Admin::find($id);
        $admin->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $admin->assignRole($request->input('roles'));

        return redirect()->route('admin.admins.index')
            ->with('success','Admin updated successfully');
    }

    public function destroy(Request $request)
    {
        Admin::find($request->id)->delete();
        return redirect()->route('admin.admins.index')
            ->with('success','Admin deleted successfully');
    }
}
