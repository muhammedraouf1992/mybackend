<?php

use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/logout', [AdminController::class, 'Logout'])->name('admin.logout');

Route::prefix('admin')->group(function () {
    Route::get('/profile', [AdminController::class, 'getProfile'])->name('admin.profile');
    Route::get('/profile/edit', [AdminController::class, 'editProfile'])->name('admin.edit');
    Route::put('/profile', [AdminController::class, 'updateProfile'])->name('admin.update');
    Route::get('/password/edit', [AdminController::class, 'editPassword'])->name('admin.password_edit');
    Route::put('/password', [AdminController::class, 'updatePassword'])->name('admin.update_password');
});
Route::prefix('services')->group(function () {
    Route::get('/services', [ServiceController::class, 'webIndex'])->name('allServices');
    Route::get('/create', [ServiceController::class, 'create'])->name('addServices');
    Route::post('/services', [ServiceController::class, 'store'])->name('serviceStore');
    Route::get('/{service}', [ServiceController::class, 'edit'])->name('servicesEdit');
    Route::put('/{service}', [ServiceController::class, 'update'])->name('servicesUpdate');
    Route::delete('/{service}', [ServiceController::class, 'delete'])->name('servicesDelete');
});
Route::prefix('projects')->group(function () {
    Route::get('/', [ProjectController::class, 'webIndex'])->name('allProjects');
    Route::get('/create', [ProjectController::class, 'create'])->name('addProject');
    Route::post('/', [ProjectController::class, 'store'])->name('storeProject');
    Route::get('/{project}/edit', [ProjectController::class, 'edit'])->name('editProject');
    Route::put('/{project}', [ProjectController::class, 'update'])->name('updateProject');
    Route::delete('/{project}', [ProjectController::class, 'delete'])->name('deleteProject');
});

Route::prefix('courses')->group(function () {
    Route::get('/', [CoursesController::class, 'webIndex'])->name('allCourses');
    Route::get('/create', [CoursesController::class, 'create'])->name('addCourse');
    Route::post('/', [CoursesController::class, 'store'])->name('storeCourse');
    Route::get('/{course}/edit', [CoursesController::class, 'edit'])->name('editCourse');
    Route::put('/{course}', [CoursesController::class, 'update'])->name('updateCourse');
    Route::delete('/{course}', [CoursesController::class, 'delete'])->name('deleteCourse');
});

Route::prefix('home')->group(function () {
    Route::get('/', [HomePageController::class, 'webIndex'])->name('allHome');
    Route::get('/{home}/edit', [HomePageController::class, 'edit'])->name('editHome');
    Route::put('/{home}', [HomePageController::class, 'update'])->name('updateHome');
});
Route::prefix('reviews')->group(function () {
    Route::get('/', [ClientReviewController::class, 'webIndex'])->name('allReviews');
    Route::get('/create', [ClientReviewController::class, 'create'])->name('addReview');
    Route::post('/', [ClientReviewController::class, 'store'])->name('storeReview');
    Route::get('/{review}/edit', [ClientReviewController::class, 'edit'])->name('editReview');
    Route::put('/{review}', [ClientReviewController::class, 'update'])->name('updateReview');
    Route::delete('/{review}', [ClientReviewController::class, 'delete'])->name('deleteReview');
});
Route::prefix('footer')->group(function () {
    Route::get('/', [FooterController::class, 'webIndex'])->name('allFooter');
    Route::get('/{footer}/edit', [FooterController::class, 'edit'])->name('editFooter');
    Route::put('/{footer}', [FooterController::class, 'update'])->name('updateFooter');
});
