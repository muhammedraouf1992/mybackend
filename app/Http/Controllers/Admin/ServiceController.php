<?php

namespace App\Http\Controllers\Admin;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $data = Services::all();
        return response()->json($data);
    }
    public function webIndex()
    {
        $service = Services::all();
        return view('admin.backend.services.services', compact('service'));
    }
    public function create()
    {
        return view('admin.backend.services.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => 'required',
            'image' => 'required'
        ]);
        $image = $request->file('image');
        $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/services'), $img_name);
        $store_name = 'uploads/services/' . $img_name;
        Services::create([
            'service_name' => $request->name,
            'service_description' => $request->description,
            'service_image' => $store_name
        ]);
        return redirect()->route('allServices');
    }
    public function edit(Services $service)
    {

        return view('admin.backend.services.edit', compact('service'));
    }
    public function update(Request $request, Services $service)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => 'required',

        ]);
        if ($request->has('image')) {
            $image = $request->file('image');

            $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
            File::delete($service->service_image);
            $image->move(public_path('uploads/services'), $img_name);
            $store_name = 'uploads/services/' . $img_name;
            $service->update([

                'service_image' => $store_name
            ]);
        };
        $service->update([
            'service_name' => $request->name,
            'service_description' => $request->description
        ]);
        return redirect()->route('allServices');
    }
    public function delete(Services $service)
    {

        $service->delete();
        unlink($service->service_image);
        return redirect()->route('allServices');
    }
}
