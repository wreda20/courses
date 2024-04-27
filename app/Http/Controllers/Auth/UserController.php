<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        return  view('User.auth.login');
    }

    public function store(Request $request)
    {
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function signup()
    {
        return view('User.auth.register');
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        $user->save();
        auth()->login($user);


        return redirect()->route('dashboard');
    }
}

/*
    $user = new App\Models\User();
    $user -> name='user';
    $user -> email='user@gmail.com';
    $user -> password=bcrypt("user123123");
    $user -> save();
*/