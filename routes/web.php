<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
// use App\Http\Controllers\Aspirante\AspiranteController;
// use App\Http\Controllers\Aspirante\HomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Verificar\VerificarController;
use App\Http\Controllers\Auth\DestroyController;
use App\Http\Controllers\Datos\DatosController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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


// Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

Route::get('/verify', [VerificarController::class, 'verify'])->name('verify');
Route::post('/verify/codigo', [VerificarController::class, 'codigo'])->name('verificar.codigo');
Route::post('/verify/destroy/{id}', [RegisterController::class, 'destroy'])->name('verificar.destruir');


Route::get('/pre-registro', [DatosController::class, 'vista'])->middleware('verified')->name('pre-registro.vista');
Route::post('/pre-registro', [DatosController::class, 'datos'])->name('pre-registro.datos');
// Route::get('/inicio', [UserController::class, 'inicio'])->middleware('verified')->name('user.inicio');

