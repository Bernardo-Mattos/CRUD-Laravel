<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// vulgo router

// home
Route::get('/', [HomeController::class,'index'])-> name('home');



Route::prefix('users')->group(function () {
    Route::post('/create', [HomeController::class, 'create'])->name('users.create');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('users.edit');
    Route::put('/update/{id}', [HomeController::class, 'update'])->name('users.update');
    Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('users.delete');

});
