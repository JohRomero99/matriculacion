<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class,'index'])->name('admin.home');
Route::put('/update/{id}', [HomeController::class,'update'])->name('admin.update');