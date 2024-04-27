<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Select;
use App\Models\UserCourses;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function slectCourse(Request $request)
    {

//        return $request;

        Select::create([
            'courseName'=>$request->courseName,
            'userId' => auth()->user()->id,
        ]);

       UserCourses::create([
           'title' => $request->title,
           'lessons' => $request->lessons,
           'level' =>  $request->level,
           'auth' => $request->auth,
           'image' => $request->image,
           'course_id' => $request->course_id
       ]);

        return redirect()->back();
    }
}
