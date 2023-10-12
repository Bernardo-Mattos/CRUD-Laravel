<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// vulgo router

Route::get('/', [HomeController::class,'index'])-> name('home');

Route::prefix('users')->group(function(){
    Route::get('/users', [UserController::class,'index'])->name('users.index');
});

Route::post('/users/create', [UserController::class,'create'])->name('users.create');
Route::post('/users', [UserController::class,'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class,'show'])->name('users.show');
Route::get('/users/edit/{id}', [UserController::class,'edit'])->name('users.edit');
Route::post('/users/update/{id}', [UserController::class,'update'])->name('users.update');
Route::get('/users/delete/{id}', [UserController::class,'destroy'])->name('users.destroy');
