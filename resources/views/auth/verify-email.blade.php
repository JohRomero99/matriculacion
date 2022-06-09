@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col mt-5">
            <div class="d-flex justify-content-center align-items-center">
                <img src="https://i.ibb.co/jhw1MgB/proteger.png"  >
            </div>
        </div>
        <div class="col">
            <div class="card mt-4">
                <div class="card-header display-6 text-center"><strong>{{ __('Verifique su dirección de correo electrónico') }}</strong></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                        </div>
                    @endif

                    <div class="text-center"><strong>1.- Abre el mensaje que te hemos enviado a:</strong></div>
                    <p class="text-center m-2">{{ Auth::user()->email }}</p>
                    <div class="text-center">¿Esta dirección de correo es incorrecta?. Vuelva a registrarte con un email diferente 
                        <form class="d-inline" action="{{ route('logout') }}" method="post">
                            @csrf
                            <button style="border:none;background:#fff;color:blue;text-decoration:underline" >cerrar sesion aquí</button>
                        </form>
                    </div>
                
                    <div class="container mt-3">
                        <div class="text-center"><strong>2.- Pulsa en el botón "Confirmar email"</strong></div>
                        <div class="text-center">Así confirmaremos que tu email</div>
                    </div>
                
                    <!-- {{ __('Antes de continuar, verifique su correo electrónico para obtener un enlace de verificación.') }}
                    {{ __('Si no recibiste el correo electrónico') }}, -->
                    <form class="d-inline d-flex justify-content-center" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('haga clic aquí para solicitar otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
