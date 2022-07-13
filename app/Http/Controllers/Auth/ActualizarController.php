<?php

namespace App\Http\Controllers\Auth;
use App\Models\Representante;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;


class ActualizarController extends Controller
{
    public function vista(){

        $id = Auth::user()->id;

        $update = Representante::find($id);

        $user = User::find($id);

        return view('auth.actualizar', compact('update','user'));

    }

    public function datos(Request $request,$id){

        $request->validate([
            'nombre' => 'required|max:255|string',
            'apellido' => 'required|max:255|string',
            'telefono' => 'required',
            'direccion' => 'required|max:255|string',
        ]);

        $user = Representante::find($id);
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->telefono = $request->telefono;
        $user->direccion = $request->direccion;

        $user->save();

        return back()->with('datos','Datos actualizados correctamente');

    }

    public function correo(Request $request){

        try {
        
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
    
            $user = User::find(Auth::user()->id);
    
            $user->email = $request->email;
            $user->email_verified_at = null;
            $user->save();
    
            event(new Registered($user));
    
            return redirect()->route('verification.notice')
                ->with('mensaje','Correo Registrado correctamente');


        } catch (\Throwable $th) {
            
            

        }

    }

}
