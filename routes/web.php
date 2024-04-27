<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\User\CoursesController;
use App\Http\Controllers\User\HomeController;
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

// =====================================================================================================

// login || Request User
Route::group(['middleware' =>'guest'], function (){
    // User Login
    Route::get('/', [UserController::class, 'index'])->name('login');

    // Request User Login
    Route::post('login', [UserController::class, 'store'])->name('store');

    // User Register
    Route::get('register', [UserController::class, 'signup'])->name('register');

    // Request User Login
    Route::post('createUser', [UserController::class, 'create'])->name('create');

});


// Auth User
Route::group(['middleware' => 'auth'], function () {
    // User dashboard
//   Route::view('home', 'User.index')->name('dashboard');
   Route::get('index', [HomeController::class, 'index'])->name('dashboard');

   Route::get('/coursesPage/{id}', 'CoursesController@index')->name('PageCourses');
   Route::get('/AllCourses', 'CoursesController@AllCourses')->name('All-Courses');
//    Route::post('/selection', 'CoursesController@slectCourse')->name('selection');


    // Select Course
    Route::post('/selection', 'SelectController@slectCourse')->name('selection');




    // User Logout
   Route::post('logout', [UserController::class, 'logout'])->name('logout');
});


