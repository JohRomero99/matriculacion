@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row align-items-center g-lg-5 py-4">
      <div class="col-md-10 mx-auto col-lg-5">

      <form class="p-4 p-md-5 border rounded-3 bg-white mt-5" method="POST" action="{{ route('register.post', $ci) }}">
        @csrf
            <div class="form-floating mb-3">
                <input  value="{{ old('email') }}" name="email" id="email" type="email" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('email') is-invalid @enderror">
                @error('email')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingInput">Correo</label>
            </div>
            <div class="form-floating mb-3">
                <input  value="{{ old('name') }}" name="name" id="username" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('name') is-invalid @enderror">
                @error('name')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingPassword">Usuario</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password" id="password" type="password" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('password') is-invalid @enderror">
                @error('password')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0" >
                <label for="floatingPassword">Confirmar contraseña</label>
            </div>
            <div class="row">
                <div class="col">
                    <a class="text-white w-100 btn btn-lg btn-dark" href="{{ route('login') }}">Regresar</a>
                </div>
                <div class="col">
                    <button class="w-100 btn btn-lg btn btn-dark" type="submit">Finalizar  <i class="bi bi-box-arrow-in-right"></i></button>
                </div>
            </div>
            <hr class="my-4">
            <small class="text-muted d-flex justify-content-center">NSC - Nuestra Señora Del Carmen</small>
        </form>


      </div>
      <div class="col-lg-7 text-center text-lg-start">

        <h1 class="display-4 fw-bold lh-1 mb-3 mt-3">Regístrate</h1>
        <p class="col-lg-10 fs-4 fw-bold">- La contraseña debe cumplir con los siguiente requsitos:</p>
        <p class="col-lg-10 fs-4">- Ser mayor a 8 dígitos.</p>
        <p class="col-lg-10 fs-4">- Contener al menos una letra mayúscula y una minúscula.</p>
        <p class="col-lg-10 fs-4">- Debe requerir al menos una letra.</p>
        <p class="col-lg-10 fs-4">- Tener al menos un número.</p>
        <p class="col-lg-10 fs-4">- Tener al menos un símbolo.</p>

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
  .file{
    visibility: hidden;
    position: absolute;
  }
</style>

@if(session('success') == 'Perfil guardado correctamente' )
    <script>
    Swal.fire({
    icon: 'success',
    title: 'Exito',
    text: 'Perfil guardado correctamente',
    })
    </script>
@endif

@endsection()

