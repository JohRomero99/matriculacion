<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Codigo;
use Illuminate\Support\Facades\Hash;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm($ci)
    {
        try {
            
            $ci = decrypt($ci);
    
            return view('auth.register', compact('ci'));

        } catch (\Throwable $th) {
            
            return redirect()->route('login')
                ->with('warning','Ocurrio un error, Vuelverlo a intentar');

        }

    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request, $ci){
        
            
            $this->validator($request->all())->validate();

        // try {
    
            event(new Registered($user = $this->create($request->all())));

            event(new Registered($user));

            $data = Codigo::where('representante','=',$ci)->get();
            $data[0]->estado = "Verificado";
            $data[0]->save();
    
            $this->guard()->login($user);
    
            if ($response = $this->registered($request, $user)) {
                return $response;
            }
    
            return $request->wantsJson()
                        ? new JsonResponse([], 201)
                        : redirect($this->redirectPath());

        // } catch (\Throwable $th) {
            
        //     return redirect()->route('login')
        //         ->with('warning','Ocurrio un error, Vuelverlo a intentar');

        // }
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
