<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class CoursesController extends Controller
{
    public function index()
    {
        $data = Course::all();
        return response()->json($data);
    }
    public function show(Course $course)
    {
        return response()->json($course);
    }
    public function webIndex()
    {
        $courses = Course::all();
        return view('admin.backend.courses.index', compact('courses'));
    }
    public function create()
    {
        return view('admin.backend.courses.create');
    }
    public function store(Request $request)
    {
        $image = $request->file('image');
        $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/courses'), $img_name);
        $last_name = 'uploads/courses/' . $img_name;
        Course::create([
            'short_title' => $request->short_title,
            'short_description' => $request->short_description,
            'long_title' => $request->long_title,
            'long_description' => $request->long_description,
            'short_image' => $last_name,
            'duration' => $request->duration,
            'lectures' => $request->lectures,
            'student' => $request->student,
            'skill_all' => 'course two skills',
            'video_url' => 'www.youtube.come',
        ]);
        return redirect()->route('allCourses');
    }
    public function edit(Course $course)
    {
        return view('admin.backend.courses.edit', compact('course'));
    }
    public function update(Course $course, Request $request)
    {
        if ($request->has('image')) {
            $image = $request->file('image');
            $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
            unlink($course->short_image);
            $image->move(public_path('uploads/courses'), $img_name);
            $last_name = 'uploads/courses/' . $img_name;
            $course->update([
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_title' => $request->long_title,
                'long_description' => $request->long_description,
                'short_image' => $last_name,
                'duration' => $request->duration,
                'lectures' => $request->lectures,
                'student' => $request->student,
                'skill_all' => 'course two skills',
                'video_url' => 'www.youtube.come',
            ]);
        } else {
            $course->update([
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_title' => $request->long_title,
                'long_description' => $request->long_description,

                'duration' => $request->duration,
                'lectures' => $request->lectures,
                'student' => $request->student,
                'skill_all' => 'course two skills',
                'video_url' => 'www.youtube.come',
            ]);
        }
        return redirect()->route('allCourses');
    }
    public function delete(Course $course)
    {
        $course->delete();
        unlink($course->short_image);
        return redirect()->route('allCourses');
    }
}
