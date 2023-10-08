<?php

use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;

use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/charts', [ChartController::class, 'index']);

Route::get('/reviews', [ClientReviewController::class, 'index']);

Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/courses/{course}', [CoursesController::class, 'show']);

Route::get('/footer', [FooterController::class, 'index']);

Route::get('/informations', [InformationController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{project}', [ProjectController::class, 'show']);

Route::get('/homePage', [HomePageController::class, 'index']);
