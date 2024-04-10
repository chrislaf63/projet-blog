<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [pageController::class, 'welcome']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/legals', [pageController::class, 'legals']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard/myposts', PostController::class .'@index')->name('myposts');
Route::get('/dashboard/create', [PostController::class, 'create'])->name('create');
Route::post('/dashboard/create', [PostController::class, 'store'])->name('store');
Route::delete('/dashboard/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/dashboard/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/dashboard/{post}', [PostController::class, 'update'])->name('posts.update');
//Route::middleware('auth')->group(function (){
//    Route::get('/dashboard', [PostController::class, 'create']);
//});

require __DIR__.'/auth.php';
