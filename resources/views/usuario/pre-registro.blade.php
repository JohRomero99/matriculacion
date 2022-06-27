@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row align-items-center g-lg-5 py-2">
      <div class="col-md-10 mx-auto col-lg-5">

      <form class="p-4 p-md-5 border rounded-3 bg-white" method="POST" action="{{ route('pre-registro.datos', $ci) }}">
        @csrf
            <div class="form-floating mb-3">
                <input value="" name="nombre" id="nombre" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0">
                @error('nombre')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input  name="apellido" id="apellido" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('email') is-invalid @enderror">
                @error('apellido')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingInput">Apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input  name="fecha_nacimiento" id="fecha_nacimiento" type="date" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('name') is-invalid @enderror">
                @error('fecha_nacimiento')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingPassword">Fecha de Nacimiento</label>
            </div>
            <div class="form-floating mb-3">
                <input name="telefono" id="telefono" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('password') is-invalid @enderror">
                @error('telefono')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingPassword">Telefono</label>
            </div>
            <div class="form-floating mb-3">
              <input name="direccion" id="direccion" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('password') is-invalid @enderror">
                @error('direccion')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingPassword">Direcion Domiciliaria</label>
            </div>
            <button class="w-100 btn btn-lg btn btn-dark" type="submit">Continuar  <i class="bi bi-box-arrow-in-right"></i></button>
            <hr class="my-4">
            <small class="text-muted d-flex justify-content-center">NSC - Nuestra Señora Del Carmen</small>
        </form>


      </div>
      <div class="col-lg-7 text-center text-lg-start">

        <h1 class="display-4 fw-bold lh-1 mb-3 mt-3">Completa tu Perfil</h1>
        <p class="col-lg-10 fs-4">- Nombres Completos</p>
        <p class="col-lg-10 fs-4">- Apellidos Completos</p>
        <p class="col-lg-10 fs-4">- Fecha de Nacimiento</p>
        <p class="col-lg-10 fs-4">- Teléfono</p>
        <p class="col-lg-10 fs-4">- Dirección Domiciliaria</p>

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