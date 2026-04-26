<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController; // Tambahkan ini
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TodoController;

Route::resource('todo', TodoController::class);


Route::get('/products/export', [ProductController::class, 'export'])->middleware('can:export-product')->name('products.export');
Route::resource('products', ProductController::class);
Route::resource('categories', \App\Http\Controllers\CategoryController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/about', [AboutController::class, 'index'])->name('about');

});

require __DIR__.'/auth.php';
