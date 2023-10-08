<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $data = Footer::all();
        return response()->json($data);
    }
    public function webIndex()
    {
        $footer = Footer::all();
        return view('admin.backend.footer.index', compact('footer'));
    }
    public function edit(Footer $footer)
    {
        return view('admin.backend.footer.edit', compact('footer'));
    }
    public function update(Footer $footer, Request $request)
    {
        $footer->update([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'copyright' => $request->copyright,
        ]);
        return redirect()->route('allFooter');
    }
}
