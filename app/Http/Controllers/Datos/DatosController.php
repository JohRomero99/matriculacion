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

    public function update(){

        return view('user.actualizar');

    }

    public function datos(Request $request){

        $request->validate([
            'nombre' => 'required|max:255|string',
            'apellido' => 'required',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
        ]);

        $data = Dato::create($request->all());

        return redirect()->route('home');

    }
}
