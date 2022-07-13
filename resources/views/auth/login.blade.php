@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Iniciar Sesión</h1>
        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        <!-- <img src="https://i.ibb.co/QFgW23G/fondo.jpg" width="600" height="453"  alt=""> -->
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-white" method="POST" action="{{ route('login') }}">
            @csrf
          <div class="form-floating mb-3">
            <input type="text" name="name" class="id form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('name') is-invalid @enderror" id="name" placeholder=" ">
                @error('name')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
            <label for="floatingInput">Usuario</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="id form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0  @error('password') is-invalid @enderror" id="password" placeholder=" ">
                @error('password')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
            <label for="floatingPassword">Contraseña</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Recordar credenciales
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-dark" type="submit">Iniciar Sesión  <i class="bi bi-box-arrow-in-right"></i></button>
            @if (Route::has('password.request'))
            <a class="btn btn-link d-flex justify-content-center" href="{{ route('password.request') }}">
                {{ __('¿Olvidaste tu contraseña?') }}
            </a>
            @endif
            <a class="btn btn-link d-flex justify-content-center" href="{{ route('verificar') }}">
                {{ __('Crear Usuario y contraseña') }}
            </a>
        </form>
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

@if(session('error') == 'Código Desconocido' )
    <script>
    Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Número de Cédula Desconicido!',
    })
    </script>
@endif
@if(session('info') == 'Ya tienes un usuario y contraseña creados')
    <script>
    Swal.fire({
    icon: 'warning',
    title: 'info',
    text: 'Ya tienes credenciales creados',
    })
    </script>
@endif


@endsection
