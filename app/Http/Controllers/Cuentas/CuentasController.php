<?php

namespace App\Http\Controllers\Cuentas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CuentasController extends Controller
{
    public function pension(){

        return view('cuentas.pension');

    }
    public function matricula(){

        return view('cuentas.matricula');

    }
    public function seguro(){

        return view('cuentas.seguro');

    }
    public function ambiente(){

        return view('cuentas.ambiente');

    }

    public function pagos(){

        return view('cuentas.pagos');

    }
}
