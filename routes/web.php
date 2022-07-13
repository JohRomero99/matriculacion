<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Auth\ActualizarController;
use App\Http\Controllers\Paymentez\PaymentezController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Cuentas\CuentasController;
use App\Http\Controllers\Auth\FileController;
use App\Http\Controllers\Auth\VerificarController;
use App\Http\Controllers\Representante\RepresentanteController;
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


    return redirect()->route('inicio')->with('correo','Correo verificado con éxito');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('mensaje', '¡Enlace de verificación reenviado!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::post('/subir/imagen', [FileController::class, 'imagen'])->name('subir.imagen');

Route::get('/verificar', [VerificarController::class, 'verify'])->name('verificar');
Route::post('/verificar/codigo', [VerificarController::class, 'codigo'])->name('verificar.codigo');

Route::get('/pre-registro/{id}', [RepresentanteController::class, 'vista'])->name('pre-registro.vista');
Route::post('/pre-registro/{id}', [RepresentanteController::class, 'datos'])->name('pre-registro.datos'); 

Route::post('/actualizar/correo/', [ActualizarController::class, 'correo'])->name('actualizar.correo');
Route::get('/actualizar/perfil/', [ActualizarController::class, 'vista'])->middleware('verified')->name('actualizar.vista');
Route::post('/actualizar/perfil/{id}', [ActualizarController::class, 'datos'])->middleware('verified')->name('actualizar.datos');

// Route::get('/pension', [CuentasController::class, 'pension'])->middleware('verified')->name('inicio');
// Route::get('/matricula', [CuentasController::class, 'matricula'])->middleware('verified')->name('matricula');
// Route::get('/seguro', [CuentasController::class, 'seguro'])->middleware('verified')->name('seguro');
// Route::get('/ambiente-digital', [CuentasController::class, 'ambiente'])->middleware('verified')->name('ambiente-digital');
// Route::get('/pagos', [CuentasController::class, 'pagos'])->middleware('verified')->name('pagos');

Route::get('/inicio', [HomeController::class, 'inicio'])->middleware('verified')->name('inicio');
Route::get('/inicio/paymentez', [PaymentezController::class, 'paymentez'])->middleware('verified')->name('paymentez');

