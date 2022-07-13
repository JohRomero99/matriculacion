<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Codigo;
use App\Models\Representante;

class VerificarController extends Controller
{
    public function verify(){

        return view('auth.verify');

    }

    public function codigo(Request $request){
        
            $request->validate([

                'cedula' => 'required',
                'codigo' => 'required',
    
            ]);

        // try {
    
            $cedula = Codigo::where('representante','=',$request->input('cedula'))->get();

            if ($cedula->isEmpty()) {

                return redirect()->route('login')
                    ->with('error','Código Desconocido');
    
            }else{
    
                // $verificar = Codigo::find($cedula[0]);
    
                if($cedula[0]->codigo != $request->input('codigo')){
 
                    return redirect()->route('login')
                        ->with('error','Código Desconocido');

                }
                elseif($cedula[0]->estado == "Verificado"){
    
                    return redirect()->route('login')
                        ->with('info','Ya tienes un usuario y contraseña creados');
                        
                }
                elseif($cedula[0]->estado == "Pendiente"){

                    $ci =  Representante::where('cedula','=',$request->input('cedula'))->get();
    
                    // $ci = $cedula[0]->id;
                    $ci = encrypt($ci);
                    // return redirect()->route('register.verificar',$ci);

                    return redirect()->route('pre-registro.vista', $ci)
                        ->with('success','Datos validados correctamente');
    
                }
    
            }


        // } catch (\Throwable $th) {

        //     return redirect()->route('login')
        //         ->with('error','Ocurrio un error, Vuelvelo a intentar');
    
        // }

    }
}
