<?php

namespace App\Http\Controllers\Datos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dato;

class DatosController extends Controller
{
    public function vista($ci){

        try {
            
            $ci = decrypt($ci);

            return view('usuario.pre-registro',compact('ci'));

        } catch (\Throwable $th) {
            
            return redirect()->route('login')
            ->with('warning','Ocurrio un error, Vuelverlo a intentar');

        }

    }

    public function update(){

        return view('usuario.actualizar');

    }

    public function datos(Request $request, $ci){

        try {
            
            $request->validate([
                'nombre' => 'required|max:255|string',
                'apellido' => 'required',
                'telefono' => 'required',
                'fecha_nacimiento' => 'required',
                'direccion' => 'required',
            ]);
    
            $verificar = encrypt($ci);
    
            $data = Dato::create($request->all());
    
            return redirect()->route('register.verificar', $verificar );


        } catch (\Throwable $th) {
            
            return redirect()->route('login')
                ->with('warning','Ocurrio un error, Vuelverlo a intentar');

        }   

    }
}
