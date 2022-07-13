<?php

namespace App\Http\Controllers\Representante;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Dato;
use App\Models\Representante;

class RepresentanteController extends Controller
{
    public function vista($ci){

        // try {
            
            $ci = decrypt($ci);

            return view('auth.pre-registro',compact('ci'));

        // } catch (\Throwable $th) {
            
        //     return redirect()->route('login')
        //         ->with('warning','Ocurrio un error, Vuelverlo a intentar');

        // }

    }

    public function update(){

        return view('auth.actualizar');

    }

    public function datos(Request $request, $ci){
            
            $request->validate([
                'nombre' => 'required|regex:/^[\pL\s\-]+$/u|max:255|string|',
                'apellido' => 'required|regex:/^[\pL\s\-]+$/u|max:255|string',
                'telefono' => 'required|numeric|digits_between:6,10',
                'fecha_nacimiento' => 'required',
                'direccion' => 'required|max:255|string',
            ]);

            try {

                $data =  Representante::where('cedula','=',$ci)->get();

                $data[0]->nombre = $request->nombre;
                $data[0]->apellido = $request->apellido;
                $data[0]->fecha_nacimiento = $request->fecha_nacimiento;
                $data[0]->telefono = $request->telefono;
                $data[0]->direccion = $request->direccion;
                $data[0]->save();

                // return $ci;

                $cedula = encrypt($ci);
        
                return redirect()->route('register.verificar', $cedula)
                    ->with('success','Perfil guardado correctamente');


        } catch (\Throwable $th) {
            
            return redirect()->route('login')
                ->with('warning','Ocurrio un error, Vuelverlo a intentar');

        }   

    }
}
