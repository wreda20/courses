<?php

use App\Http\Controllers\Auth\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Guest Admin
Route::prefix('admin')->name('admin.')->group(function (){

    // Auth User
    Route::middleware('guest:admin')->group(function (){
        // Admin Login Form
        Route::get('/', [AdminController::class, 'index'])->name('login');

        // Request Login
        Route::post('login', [AdminController::class, 'store'])->name('store');
    });

// ===========================================================================================================

    // Auth Admin
    Route::middleware('auth:admin')->group(function (){
        // Admin Dashboard
        Route::view('dashboard', 'Admin.index')->name('dashboard');

        // Courses Page
        Route::resource('courses', 'CoursesController');

        // lessons Page
        Route::resource('lessons', 'LessonController');
        Route::get('View_file/{docs}', 'LessonController@openFile')->name('openFile');

        // Permission Controller
        Route::resource('roles','RoleController');
        Route::resource('admins','AdminController');


        // Admin Logout
        Route::post('logout', [AdminController::class, 'logout'])->name('logout');
    });

});


