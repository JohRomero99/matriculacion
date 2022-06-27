<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\User\UserController;

Route::get('', [HomeController::class,'index'])->name('admin.home');
Route::put('/update/{id}', [HomeController::class,'update'])->name('admin.update');

// Route::get('/inicio', [UserController::class, 'inicio'])->name('inicio');
