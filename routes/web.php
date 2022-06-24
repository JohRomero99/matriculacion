<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\auth\ActualizarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Verificar\VerificarController;
use App\Http\Controllers\Auth\DestroyController;
use App\Http\Controllers\Datos\DatosController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/pre-registro');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('/home', [HomeController::class, 'index'])->middleware('verified')->name('home');

Route::get('/verify', [VerificarController::class, 'verify'])->name('verify');
Route::post('/verify/codigo', [VerificarController::class, 'codigo'])->name('verificar.codigo');
Route::post('/verify/destroy/{id}', [RegisterController::class, 'destroy'])->name('verificar.destruir');


Route::get('/pre-registro', [DatosController::class, 'vista'])->middleware('verified')->name('pre-registro.vista');
Route::post('/pre-registro', [DatosController::class, 'datos'])->name('pre-registro.datos'); 

Route::get('/update/perfil/', [ActualizarController::class, 'vista'])->middleware('verified')->name('actualizar.vista');
Route::post('/update/perfil', [ActualizarController::class, 'datos'])->middleware('verified')->name('actualizar.datos');

Route::get('/paymentez', [UserController::class, 'paymentez'])->middleware('verified')->name('paymentez');
Route::get('/inicio', [UserController::class, 'inicio'])->middleware('verified')->name('inicio');

