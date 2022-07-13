<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuenta;

class UsuarioController extends Controller
{
    public function inicio(){

        // $inicio = Cuenta::find(1);

        return view('usuario.inicio');

    }

    public function registro(){

        $inicio = Cuenta::find(1);

        return view('usuario.pre-registro',compact('inicio'));

    }

    public function paymentez(){

        return view('usuario.paymentez');

    }
}

