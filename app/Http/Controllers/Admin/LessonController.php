<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\FileBag;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();
        $coursesTitle = Courses::all();
        return view('Admin.Lessons.index', compact('lessons', 'coursesTitle'));
    }

    public function create()
    {
        $courses = Courses::all();
        return view('Admin.Lessons.create', compact('courses'));
    }

    public function store(Request $request)
    {

        $data = new Lesson();

        $file = $request -> docs;
        $filename = $request->title.'.'.$file->getClientOriginalExtension();
        $request->docs->move('Files', $filename);

        $data-> docs = $filename;
        $data-> title = $request->title;
        $data-> course_id = $request->course_id;
        $data ->save();

        return redirect()->route('admin.lessons.index');
    }

    public function show( $id)
    {

    }

    public function edit(string $id)
    {
        $edit = Lesson::findorfail($id);
        $editCourse = Courses::all();
        return view('Admin.Lessons.edit', compact('edit', 'editCourse'));
    }

    public function update(Request $request)
    {
        $UpdateLesson = Lesson::findorfail($request->id);
        $UpdateLesson->title = $request->title;
        $UpdateLesson->course_id = $request->course_id;

        if ($request->hasFile('docs'))
        {
            $file_extension = $request->docs -> getClientOriginalExtension();
            $file_name = $request->title. '.' . $file_extension;
            $path = 'Files';
            $request -> docs -> move($path, $file_name);
            File::delete(public_path('Files/'.$UpdateLesson->docs));
            $UpdateLesson->docs = $file_name;
        }

        $UpdateLesson->save();

        session()->flash('add');
        return redirect()->route('admin.lessons.index');
    }

    public function destroy(Request $request)
    {
        $Deleted =Lesson::findorfail($request->id);
        File::delete(public_path('Files/'.$Deleted->docs));
        Lesson::destroy($request->id);

        session()->flash('add');
        return redirect()->route('admin.lessons.index');
    }

    public function openFile(Request $request, $docs)
    {
        return response()->download(public_path('Files/'.$docs));
    }
}
