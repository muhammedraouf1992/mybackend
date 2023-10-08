<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function getProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.profile', compact('user'));
    }
    public function editProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('admin.edit', compact('user'));
    }
    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($request->file('profile_photo_path')) {
            $image = $request->file('profile_photo_path');
            $ext = $image->getClientOriginalExtension();
            @unlink($user->profile_photo_path);
            $newName = uniqid()  . '.' . $ext;
            $image->move(public_path('uploads/photos'), $newName);
            $lastname = 'uploads/photos/' . $newName;
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'profile_photo_path' => $lastname,
            ]);
        } else {
            $lastname = null;
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'profile_photo_path' => $lastname,
            ]);
        };


        return redirect()->route('admin.profile');
    }
    public function editPassword()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.edit_password', compact('user'));
    }
    public function updatePassword(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $data = $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'confirmed'],
        ]);
        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
        } else {
            return redirect()->route('admin.password_edit');
        }
    }
}
