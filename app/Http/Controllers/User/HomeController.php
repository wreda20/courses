<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Select;
use App\Models\UserCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Courses::orderBy('level', 'ASC')->get();
        $userCoures = UserCourses::all();
        return view('User.index', compact('courses', 'userCoures'));
    }
}
