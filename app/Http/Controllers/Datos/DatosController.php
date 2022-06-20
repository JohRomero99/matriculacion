<?php

namespace App\Http\Controllers\Datos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dato;

class DatosController extends Controller
{
    public function vista(){

        return view('user.pre-registro');

    }

    public function datos(Request $request){

        $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',

        ]);

        $data = Dato::create($request->all());

        return "bien :)";

    }
}
