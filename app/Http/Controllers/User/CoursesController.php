<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Lesson;
use App\Models\Select;
use App\Models\User;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index($id)
    {
        $courses = Courses::where('id', $id)->get();

        $lessons = Lesson::where('course_id', $id)->get();

        if (auth()->check()) {
            $select = Select::where(['courseName' => $id, 'userId' => auth()->user()->id])->first();
        }

        return view('User.Lessons.index', compact('courses', 'lessons', 'select'));

    }

    public function AllCourses()
    {
        $AllCourses = Courses::orderBy('level', 'ASC')->get();
        return view('User.Courses.AllCourses', compact('AllCourses'));
    }


}
