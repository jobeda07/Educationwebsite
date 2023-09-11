<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\backend\NoticeController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\HistoryController;
use App\Http\Controllers\backend\TeacherController;
use App\Http\Controllers\backend\PrincipleController;
use App\Http\Controllers\backend\TeacherDepartmentController;




// frontend route
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/allteacher', 'teacherpage')->name('teacher.page');
    Route::get('/allhistory', 'history')->name('history.page');
    Route::get('/allnotice', 'notice')->name('notice.page');
    Route::get('/principlePage', 'principle')->name('principle.page');
    Route::get('/allgallery', 'gallery')->name('gallery.page');
    Route::get('/contact', 'contact')->name('contact.page');
    
});


Route::get('/dashboard', function () {
    return view('backend.partials.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware('auth')->group(function(){
    Route::resources([
       'teacher' => TeacherController::class,
       'teacherdepartment' => TeacherDepartmentController::class,
       'gallery' => GalleryController::class,
       'history' => HistoryController::class,
       'notice' => NoticeController::class,
       'principle' => PrincipleController::class,
    ]);
});
