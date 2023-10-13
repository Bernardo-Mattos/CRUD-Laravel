<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// vulgo router

// home
Route::get('/', [HomeController::class,'index'])-> name('home');



Route::prefix('users')->group(function(){
    Route::post('/create' , [HomeController::class , 'create'])->name('users.create');
    Route::get('/update/{id}', [HomeController::class , 'edit'])->name('users.edit');
    Route::post('/update/{id}', [HomeController::class , 'update'])->name('users.update');
    Route::post('/delete/{id}', [HomeController::class , 'delete'])->name('users.delete');
});
