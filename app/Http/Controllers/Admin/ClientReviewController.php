<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    public function index()
    {
        $data = ClientReview::all();
        return response()->json($data);
    }
    public function webIndex()
    {
        $reviews = ClientReview::all();
        return view('admin.backend.reviews.index', compact('reviews'));
    }
    public function create()
    {
        return view('admin.backend.reviews.create');
    }
    public function store(Request $request)
    {
        $image = $request->file('image');
        $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/reviews/'), $img_name);
        $last_name = 'uploads/reviews/' . $img_name;
        ClientReview::create([
            'client_title' => $request->name,
            'client_description' => $request->description,
            'client_image' => $last_name
        ]);
        return redirect()->route('allReviews');
    }
    public function edit(ClientReview $review)
    {
        return view('admin.backend.reviews.edit', compact('review'));
    }
    public function update(ClientReview $review, Request $request)
    {
        if ($request->has('image')) {
            $image = $request->file('image');
            $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
            unlink($review->client_image);
            $image->move(public_path('uploads/reviews/'), $img_name);
            $last_name = 'uploads/reviews/' . $img_name;
            $review->update([
                'client_title' => $request->name,
                'client_description' => $request->description,
                'client_image' => $last_name
            ]);
        } else {
            $review->update([
                'client_title' => $request->name,
                'client_description' => $request->description,

            ]);
        }
        return redirect()->route('allReviews');
    }
    public function delete(ClientReview $review)
    {
        $review->delete();
        return redirect()->route('allReviews');
    }
}
