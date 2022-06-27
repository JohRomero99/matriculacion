<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function inicio(){

        return view('usuario.inicio');

    }

    public function registro(){

        return view('usuario.pre-registro');

    }

    public function paymentez(){

        return view('usuario.paymentez');

    }
}

