<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //

    public function index()
    {
        $data = Information::all();
        return response()->json($data);
    }
}
