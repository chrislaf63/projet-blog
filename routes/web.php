<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [pageController::class, 'welcome']);
Route::get('/legals', [pageController::class, 'legals']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/myposts', PostController::class . '@index')->name('myposts');
    Route::get('/dashboard/create', [PostController::class, 'create'])->name('create');
    Route::post('/dashboard/create', [PostController::class, 'store'])->name('store');
    Route::delete('/dashboard/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/dashboard/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/dashboard/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/dashboard/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/dashboard/category', [CategoryController::class, 'store'])->name('newcat');
    Route::delete('/dashboard/category/{cat}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/dashboard/category/{cat}/editCategory', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/dashboard/category/{cat}', [CategoryController::class, 'update'])->name('category.update');
});

require __DIR__.'/auth.php';
