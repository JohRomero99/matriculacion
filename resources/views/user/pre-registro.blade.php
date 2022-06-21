@extends('layouts.app')

@section('content')

  <div class="container form">
    <!-- <div class="card">
      <div class="card-header Display-5">
        <div class="d-flex justify-content-center">
            Complete su perfil
        </div>
      </div>
      <div class="card-body p-3">
        <form method="POST" action="{{ route('pre-registro.datos') }}">
          @csrf
          <div class="row">
            <div class="form-group col-md-6 p-3">
              <label for="inputEmail4">Cedula</label>
              <input name="cedula" type="text" class="bg id form-control border-0 shadow-none border-bottom border-dark" id="inputEmail4" placeholder="Ej: 09745328312" value="{{ old('cedula') }}">
              @error('cedula')
                  <br>
                      <small>*{{$message}}</small>
                  <br>
              @enderror
            </div>

            <div class="form-group col-md-6 p-3">
              <label for="inputEmail4">Fecha de Nacimiento</label>
              <input name="fecha_nacimiento" type="date" class="bg id form-control border-0 shadow-none border-bottom border-dark" value="{{ old('fecha_nacimiento') }}">
              @error('fecha_nacimiento')
                  <br>
                      <small>*{{$message}}</small>
                  <br>
              @enderror
            </div>

            <div class="form-group col-md-12 p-3">
              <label for="inputPassword4">Nombre</label>
              <input name="nombre" type="text" class="bg id form-control border-0 shadow-none border-bottom border-dark" id="inputPassword4" placeholder="Ej: Mario Ignacio" value="{{ old('nombre') }}">
              @error('cedula')
                  <br>
                      <small>*{{$message}}</small>
                  <br>
              @enderror
            </div>

            <div class="form-group col-md-12 p-3">
              <label for="inputPassword4">Apellido</label>
              <input name="apellido" type="text" class="bg id form-control border-0 shadow-none border-bottom border-dark" id="inputPassword4" placeholder="Ej: Romero centeno" value="{{ old('apellido') }}">
              @error('apellido')
                  <br>
                      <small>*{{$message}}</small>
                  <br>
              @enderror
            </div>

            <div class="row">
              <div class="form-group col-md-12 p-3">
                <label for="inputPassword4">Telefono</label>
                <input name="telefono" type="text" class="bg id form-control border-0 shadow-none border-bottom border-dark" id="inputPassword4" placeholder="Ej: 0976786598" value="{{ old('telefono') }}">
                @error('telefono')
                  <br>
                      <small>*{{$message}}</small>
                  <br>
                @enderror
              </div>

              <div class="form-group col-md-12 p-3">
                <label for="inputPassword4">Direccion</label>
                <input name="direccion" type="text" class="bg id form-control border-0 shadow-none border-bottom border-dark" id="inputPassword4" placeholder="Ej: Flor de Bastion" value="{{ old('direccion') }}">
                @error('direccion')
                  <br>
                      <small>*{{$message}}</small>
                  <br>
                @enderror
              </div>
            </div>
          </div>

        </div>
          <div class="d-flex justify-content-center m-2" >
            <Button class="btn btn-outline-dark btn-lg">Continuar    <i class="bi bi-box-arrow-right"></i></Button>
          </div>
        </form>
    </div> -->
  </div>

<style>
  .form{
    width: 550px !important;
  }
  .id:focus {
        border-bottom: 3px solid #8d4a26 !important;
    }
  .bg{
      background: #E8F0FE !important;
    }
</style>

@endsection
