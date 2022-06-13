<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Codigo;
use App\Models\Representante;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\VerificarCorreoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required'],
            'password' => ['required', 'string','confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     * 
     */
    protected function create(array $data)
    {

        $nuevoUsuario = User::create([
            'cedula' => $data['cedula'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);     
        
        return $nuevoUsuario;

    }

    public function logout(Request $request){

        Auth::logout();
        return redirect()->route('register');

    }

    public function verify(){

        return view('auth.verify');

    }

    public function codigo(Request $request){

        $codigo = Codigo::where('codigo','=',$request->input('codigo'))->pluck('id');
        
        if ($codigo->isEmpty()) {
            
            return redirect()->route('verify');
            
        }else{

            $verificar = Codigo::find($codigo[0]);

            if($verificar->estado == "Verificado"){

                return redirect()->route('verify');

            }
            elseif($verificar->estado == "Pendiente"){

                $verificar->estado = "Verificado";
                $verificar->save();
                return redirect()->route('register');

            }

        }

    }

}