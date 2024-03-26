<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IMS_Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;


Route::get('/', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('categories/create', [CategoryController::class, 'create']);
Route::post('categories/create', [CategoryController::class, 'store']);
Route::get('categories/{id}/edit', [CategoryController::class, 'edit']);
Route::put('categories/{id}/edit', [CategoryController::class, 'update']);
Route::get('categories/{id}/delete', [CategoryController::class, 'destroy']);
Route::get('/search', [CategoryController::class, 'search']);

// Route::get('/ ', function () {
//     return view('welcome');
// });

Route::get('dashboard', [IMS_Controller::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
