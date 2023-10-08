<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //

    public function index()
    {
        $data = HomePage::all();
        return response()->json($data);
    }
    public function webIndex()
    {
        $homeData = HomePage::all();
        return view('admin.backend.home.index', compact('homeData'));
    }
    public function edit(HomePage $home)
    {
        return view('admin.backend.home.edit', compact('home'));
    }
    public function update(HomePage $home, Request $request)
    {
        if ($request->has('image')) {
            $image = $request->file('image');
            $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/home'), $img_name);
            $last_name = 'uploads/home/' . $img_name;
            $home->update([
                'home_title' => $request->home_title,
                'home_subtitle' => $request->home_subtitle,
                'tech_description' => $request->tech_description,
                'student_count' => $request->student_count,
                'lecture_count' => $request->lecture_count,
                'review_count' => $request->review_count,
                'video_url' => $request->video_url,
                'home_image' => $last_name,
            ]);
        } else {
            $home->update([
                'home_title' => $request->home_title,
                'home_subtitle' => $request->home_subtitle,
                'tech_description' => $request->tech_description,
                'student_count' => $request->student_count,
                'lecture_count' => $request->lecture_count,
                'review_count' => $request->review_count,
                'video_url' => $request->video_url,

            ]);
        }
        return redirect()->route('allHome');
    }
}
