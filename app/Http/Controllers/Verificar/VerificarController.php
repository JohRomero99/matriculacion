<?php

namespace App\Http\Controllers\Verificar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Codigo;
use Illuminate\Support\Facades\Validator;

class VerificarController extends Controller
{
    public function verify(){

        return view('auth.verify');

    }

    public function codigo(Request $request){

        try {
        
            $request->validate([

                'cedula' => 'required',
                'codigo' => 'required',
    
            ]);
    
            $cedula = Codigo::where('representante','=',$request->input('cedula'))->pluck('id');
            
            if ($cedula->isEmpty()) {
    
                return redirect()->route('login')
                    ->with('warning','Cédula desconocido');
    
            }else{
    
                $verificar = Codigo::find($cedula[0]);
    
                if($verificar->codigo != $request->input('codigo')){
    
                    return redirect()->route('login')
                        ->with('warning','Código Desconocido');
    
                }
                elseif($verificar->estado == "Verificado"){
    
                    return view('auth.register', compact('verificar'));
                        
                }
                elseif($verificar->estado == "Pendiente"){
    
                    $verificar->estado = "Verificado";
                    $verificar->save();
                    return redirect()->route('register.verificar',$verificar->id);

    
                }
    
            }


        } catch (\Throwable $th) {

            throw $th;
    
        }

    }
}
