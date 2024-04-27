<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Select;
use App\Models\UserCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{

    public function index()
    {
        $courses = Courses::all();
        $selects = Select::all();
        $userCoures = UserCourses::all();
        return view('Admin.Courses.index', compact('courses', 'selects', 'userCoures'));
    }

    public function create()
    {
        return view('Admin.Courses.create');
    }


    public function store(Request $request)
    {
        $request_data = $request->all();
        if ( $request->image )
        {
            $file_extension = $request->image -> getClientOriginalExtension();
            $file_name = time(). '.' . $file_extension;
            $path = 'Images';
            $request -> image -> move($path, $file_name);

            $request_data['image'] =$file_name;
        }
//        $request_data['image'] =$file_name;

        Courses::create($request_data);

        session()->flash('add');
        return redirect()->route('admin.courses.index');


    }

    public function edit($id)
    {
        $edit = Courses::findorfail($id);
        return view('Admin.Courses.edit', compact( 'edit'));
    }

    public function update(Request $request)
    {
        $UpdateCourse = Courses::findorfail($request->id);

        $UpdateCourse->description = $request->description;
        $UpdateCourse->title = $request->title;
        $UpdateCourse->lessons = $request->lessons;
        $UpdateCourse->level = $request->level;

        if ($request->hasFile('image'))
        {
            $file_extension = $request->image -> getClientOriginalExtension();
            $file_name = time(). '.' . $file_extension;
            $path = 'Images';
            $request -> image -> move($path, $file_name);
            File::delete(public_path('Images/'.$UpdateCourse->image));
            $UpdateCourse->image = $file_name;
        }
        $UpdateCourse->save();

        session()->flash('add');
        return redirect()->route('admin.courses.index');
}

    public function destroy(Request $request)
    {
        $Deleted = Courses::findorfail($request->id);
        File::delete(public_path('Images/'.$Deleted->image));
        Courses::destroy($request->id);

        $DeletedSelectUser = UserCourses::all();
        foreach ($DeletedSelectUser as $deleteSelect) {
            if ($deleteSelect->course_id == $request->id) {
                $deleteSelect->delete();
            }
        }

        $DeleteSelect = Select::all();
        foreach ($DeleteSelect as $deleteSelected)
        {
            if ($deleteSelected->courseName == $request->id)
            {
                $deleteSelected->delete();
            }
        }
        session()->flash('add');
        return redirect()->route('admin.courses.index');

    }
}
