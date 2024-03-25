<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IMS_Controller;
use App\Http\Controllers\ProfileController;


Route::get('/', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('categories/create', [App\Http\Controllers\CategoryController::class, 'create']);
Route::post('categories/create', [App\Http\Controllers\CategoryController::class, 'store']);
Route::get('categories/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::put('categories/{id}/edit', [App\Http\Controllers\CategoryController::class, 'update']);


// Route::get('/ ', function () {
//     return view('welcome');
// });

Route::get('dashboard', [IMS_Controller::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/search', [IMS_Controller::class, 'search'])->name('search');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
