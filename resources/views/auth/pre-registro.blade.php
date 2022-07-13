@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-md-10 mx-auto col-lg-5">

      <form class="p-4 p-md-5 border rounded-3 bg-white mt-5" method="POST" action="{{ route('pre-registro.datos', $ci[0]->cedula) }}">
        @csrf
            <div class="form-floating mb-3">
                <input value="{{ $ci[0]->cedula }}" name="cedula" id="cedula" type="text" class="opacity-50 id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0" readonly>
                @error('cedula')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingInput">Cedula</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ $ci[0]->nombre }}" name="nombre" id="nombre" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0">
                @error('nombre')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input  value="{{ $ci[0]->apellido }}" name="apellido" id="apellido" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('email') is-invalid @enderror">
                @error('apellido')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingInput">Apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ $ci[0]->fecha_nacimiento }}" name="fecha_nacimiento" id="fecha_nacimiento" type="date" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('name') is-invalid @enderror">
                @error('fecha_nacimiento')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingPassword">Fecha de Nacimiento</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ $ci[0]->telefono }}" name="telefono" id="telefono" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('password') is-invalid @enderror">
                @error('telefono')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingPassword">Teléfono</label>
            </div>
            <div class="form-floating mb-3">
              <input value="{{ $ci[0]->direccion }}" name="direccion" id="direccion" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('password') is-invalid @enderror">
                @error('direccion')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
                <label for="floatingPassword">Direcion Domiciliaria</label>
            </div>
            <div class="row">
                <div class="col">
                    <a class="text-white w-100 btn btn-lg btn-dark " href="{{ route('verificar') }}">Regresar</a>
                </div>
                <div class="col">
                    <button class="w-100 btn btn-lg btn btn-dark" type="submit">Continuar  <i class="bi bi-box-arrow-in-right"></i></button>    
                </div>
            </div>
            <!-- <button class="w-100 btn btn-lg btn btn-dark" type="submit">Continuar  <i class="bi bi-box-arrow-in-right"></i></button> -->
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

@if(session('success') == 'Datos validados correctamente' )
    <script>
    Swal.fire({
    icon: 'success',
    title: 'Exito',
    text: 'Datos validados correctamente',
    })
    </script>
@endif
@endsection()