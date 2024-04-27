<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('admins')->delete();
//        $admin = Admin::create([
//            'name' => 'admin',
//            'email' => 'admin@gmail.com',
//            'password' => Hash::make('admin123123')
//        ]);
//
//        $role = Role::create(['name' => 'owner']);
//        $permissions = Permission::pluck('id','id')->all();
//        $role->syncPermissions($permissions);
//        $admin->assignRole([$role->id]);
    }
}
