@extends('layouts.plantilla')

@section('content')
<!-- <div class="container-fluid" width="900">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="formulario" class="formulario">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <div class="row mb-3" id="grupo__cedula">  
                                    <label for="cedula" class="col-md-4 col-form-label text-md-end formulario__label">{{ __('Cedula') }}</label>

                                    <div class="col-md-6">
                                        <input id="cedula" type="text" class="form-control shadow-none formulario__input" name="cedula" required autocomplete="cedula" autofocus>
                                    </div>

                                    @error('cedula')
                                        <br>
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>

                                <div class="row mb-3" id="grupo__nombre">  
                                    <label for="nombre" class="col-md-4 col-form-label text-md-end formulario__label">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input id="nombre" type="text" class="form-control shadow-none formulario__input" name="nombre" required autocomplete="nombre" autofocus>
                                    </div>

                                    @error('nombre')
                                        <br>
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>

            
                                <div class="row mb-3" id="grupo__apellido">
                                    <label for="apellido" class="col-md-4 col-form-label text-md-end formulario__label">{{ __('Apellidos') }}</label>

                                    <div class="col-md-6">
                                        <input id="apellido" type="text" class="form-control  shadow-none formulario__input" name="apellido" required autocomplete="apellido" autofocus>
                                    </div>

                                    @error('apellido')
                                        <br>
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>

                                <div class="row mb-3" id="grupo__email">
                                    <label for="email" class="col-md-4 col-form-label text-md-end formulario__label">{{ __('Correo') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control  shadow-none formulario__input" name="email" required autocomplete="email">
                                    </div>
                                    
                                    @error('email')
                                        <br>
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="row mb-3" id="grupo__telefono">
                                    <label for="telefono" class="col-md-4 col-form-label text-md-end formulario__label">{{ __('Telefono') }}</label>

                                    <div class="col-md-6">
                                        <input id="telefono" type="text" class="form-control  shadow-none formulario__input" name="telefono" required autocomplete="telefono">
                                    </div>
                                    
                                    @error('Telefono')
                                        <br>
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>

                                <div class="row mb-3" id="grupo__direccion">
                                    <label for="direccion" class="col-md-4 col-form-label text-md-end formulario__label">{{ __('Direccion') }}</label>

                                    <div class="col-md-6">
                                        <input id="direccion" type="text" class="form-control  shadow-none formulario__input" name="direccion" required autocomplete="direccion">
                                    </div>
                                    
                                    @error('direccion')
                                        <br>
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>

                                <div class="row mb-3" id="grupo__usuario">  
                                    <label for="Usuario" class="col-md-4 col-form-label text-md-end formulario__label">{{ __('Usuario') }}</label>

                                    <div class="col-md-6">
                                        <input id="usuario" type="text" class="form-control shadow-none formulario__input" name="usuario" required autocomplete="usuario" autofocus>
                                    </div>
                                    
                                    @error('usuario')
                                        <br>
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>

                                <div class="row mb-3" id="grupo__password">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control  shadow-none formulario__input" name="password" required autocomplete="new-password">
                                    </div>
                                    
                                    @error('password')
                                        <br>
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>

                                <div class="row mb-3" id="grupo__password-confirm">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control shadow-none" name="password-confirm" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Registro') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


<!-- <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="cedula" class="col-md-4 col-form-label text-md-end">{{ __('Cedula') }}</label>

                            <div class="col-md-6">
                                <input id="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula" autofocus>

                                @error('cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="row align-items-center g-lg-5 py-2">
      <div class="col-md-10 mx-auto col-lg-5">

      <form class="p-4 p-md-5 border rounded-3 bg-light">
            <div class="form-floating mb-3">
                <input type="email" class="bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0" id="floatingInput" placeholder="ejemplo@gmail.com">
                <label for="floatingInput">Correo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0" id="floatingPassword" placeholder="ejemplo@gmail.com">
                <label for="floatingPassword">Usuario</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0" id="floatingPassword" placeholder="ejemplo@gmail.com">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0" id="floatingPassword" placeholder="ejemplo@gmail.com">
                <label for="floatingPassword">Confirmar contraseña</label>
            </div>
            <button class="w-100 btn btn-lg btn btn-outline-dark" type="submit">¡Registrate!  <i class="bi bi-box-arrow-in-right"></i></button>
            <hr class="my-4">
            <small class="text-muted d-flex justify-content-center">NSC - Nuestra Señora Del Carmen</small>
        </form>


      </div>
      <div class="col-lg-7 text-center text-lg-start">

        <h1 class="display-4 fw-bold lh-1 mb-3">¡Registrate!</h1>
        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.

      </div>
    </div>
</div>

<style>
  .id:focus {
      border-bottom: 3px solid #8d4a26 !important;
  }
  .bg {
    background: #E8F0FE !important;
  }
</style>


@endsection()

