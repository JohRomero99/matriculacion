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
    <div class="mt-5">

    <div class="container col-xl-10 col-xxl-8 px-4 py-1">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="{{route('verificar.codigo')}}" class="p-4 p-md-5 border rounded-3 bg-light" method="POST" >
          @csrf
            <div class="mb-3">
                <div class="d-flex justify-content-center">
                    <label for="exampleInputEmail1" class="form-label"> <strong>Digita tu código*</strong> </label>
                </div>
                <input type="text" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" name="codigo" placeholder="Ej: GfadaCzxdZ"  >
                    <div id="emailHelp" class="form-text">- ¡No compartas tu código con nadie!</div>
                    <div id="emailHelp" class="form-text">- Ej: AbcF....xYz</div>
                    <div id="emailHelp" class="form-text">- El código solo deberá ser ingresa una vez</div>
                    <div class="d-flex justify-content-center">
                    <label for="exampleInputEmail1" class="form-label mt-3"> <strong>Digita tu cédula*</strong> </label>
                </div>
                <input type="text" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" name="codigo" placeholder="Ej: 0956473521">
                    <div id="emailHelp" class="form-text">- Cedula del representante</div>
                <div class="d-flex justify-content-center">
                  <button class="btn btn-dark mt-3" >Continuar</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>






    </div>
</div>



@endsection()