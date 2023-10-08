<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $data = Project::all();
        return response()->json($data);
    }
    public function show(Project $project)
    {
        return response()->json($project);
    }
    public function webIndex()
    {
        $projects = Project::all();
        return view('admin.backend.projects.index', compact('projects'));
    }
    public function create()
    {
        return view('admin.backend.projects.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'features' => 'required',
            'image' => 'required'
        ]);
        $image = $request->file('image');
        $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads/projects', $image_name);
        $last_name = 'uploads/projects/' . $image_name;
        Project::create([
            'project_name' => $request->name,
            'project_description' => $request->description,
            'project_features' => $request->features,
            'image_one' => $last_name,
            'image_two' => $last_name,
            'project_live' => 'www.youtube.com'
        ]);
        return redirect()->route('allProjects');
    }
    public function edit(Project $project)
    {
        return view('admin.backend.projects.edit', compact('project'));
    }
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'features' => 'required',

        ]);
        if ($request->has('image')) {
            $image = $request->file('image');
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
            // unlink($project->image_one);
            $image->move('uploads/projects', $image_name);
            $last_name = 'uploads/projects/' . $image_name;
            $project->update([
                'project_name' => $request->name,
                'project_description' => $request->description,
                'project_features' => $request->features,
                'image_one' => $last_name,
                'image_two' => $last_name,
                'project_live' => 'www.youtube.com'
            ]);
        } else {
            $last_name = 'uploads/no_image.jpg';
            $project->update([
                'project_name' => $request->name,
                'project_description' => $request->description,
                'project_features' => $request->features,
                'image_one' => $last_name,
                'image_two' => $last_name,
                'project_live' => 'www.youtube.com'
            ]);
        }
        return redirect()->route('allProjects');
    }
    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->route('allProjects');
    }
}
