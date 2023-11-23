<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// home
Route::get('/', [HomeController::class,'index'])-> name('home');

Route::prefix('users')->group(function () {
    Route::post('/create', [HomeController::class, 'create'])->name('users.create');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('users.edit');
    Route::put('/update/{id}', [HomeController::class, 'update'])->name('users.update');
    Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('users.delete');

});

Route::prefix('address')->group(function () {
    Route::get('/', [AddressController::class, 'index'])->name('address.index');
    Route::get('/create', [AddressController::class, 'create'])->name('address.create');
    Route::put('/save', [AddressController::class, 'save'])->name('address.save');
    Route::get('/edit/{id}', [AddressController::class, 'edit'])->name('address.edit');
    Route::put('/update/{id}', [AddressController::class, 'update'])->name('address.update');
    Route::delete('/delete/{id}', [AddressController::class, 'delete'])->name('address.delete');
});
