<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return  view('Admin.auth.login');
    }

    public function store(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function logout()
    {
        auth('admin')->logout();
        return redirect()->route('admin.login');
    }
}

/*
    $admin = new App\Models\Admin();
    $admin -> name='admin';
    $admin -> email='admin@gmail.com';
    $admin -> password=bcrypt("admin123123");
    $admin -> save();
*/
