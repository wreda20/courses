<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{

    private $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
    ];

    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['guard_name' => 'admin', 'name' => $permission]);
        }

        // Create admin User and assign the role to him.
        $admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123123'),
            'roles_name' => ["manager"],
            'Status' => 'Online',
        ]);

        $role = Role::create(['guard_name' => 'admin', 'name' => 'manager']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $admin->assignRole([$role->id]);
    }

}
