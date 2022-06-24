@extends('layouts.app')

@section('content')

  <div class="container">
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

<!-- <div class="row align-items-center g-lg-5 py-5">
  <form class="p-4 p-md-5 border rounded-3 bg-light border-0 form">
    <div class="form-floating mb-3">
      <input type="email" class="id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Cedula</label>
    </div>
    <div class="form-floating mb-3">
      <input type="date" class="form-control id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Fecha de nacimmiento</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" class="id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Nombre</label>
    </div> 
    <div class="form-floating mb-3">
      <input type="password" class="id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Apellido</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Telefono</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Direcccion</label>
    </div>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Continuar</button>
    <hr class="my-4">
    <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
  </form>
</div> -->

    <!-- <div class="row align-items-center g-lg-5 py-0">
      <div class="col-md-10 mx-auto col-lg-8">
        <form class="p-4 p-md-5 rounded-3 shadow">
          <div class="form-floating mb-3">
            <input type="email" class="id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Cedula</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Fecha de nacimmiento</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nombre</label>
          </div> 
          <div class="form-floating mb-3">
            <input type="password" class="id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Apellido</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Telefono</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="id bg  border-bottom border-dark form-control border-0 shadow-none" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Direcccion</label>
          </div>
          <button class="w-100 btn btn-lg btn-dark" type="submit">Continuar</button>
          <hr class="my-4">
        </form>
      </div>
    </div> -->

    <div class="borders row featurette shadow-sm bg-white">
      <div class="col-md-8 order-md-2">
        <form class="p-4 p-md-5 rounded-3 col-lg-10 mx-auto mt-5">
        <h3 class="text-center mb-3" >
          Complete
          <small class="text-muted">su Perfil</small>
        </h3>
          <div class="row g-2">
            <div class="col-6 form-floating mb-3">
              <input type="text" class="id bg border-bottom border-dark form-control border-0 shadow-none" id="email"  name="email" placeholder="name@example.com">
              @error('email')
                  <br>
                      <small>*{{$message}}</small>
                  <br>
              @enderror
              <label for="floatingInput">Nombre</label>
            </div> 
            <div class="col-6 form-floating mb-3">
              <input type="text" class="id bg border-bottom border-dark form-control border-0 shadow-none" id="nombre" name="nombre" placeholder="Password">
              @error('nombre')
                  <br>
                      <small>*{{$message}}</small>
                  <br>
              @enderror
              <label for="floatingPassword">Apellido</label>
            </div>
          </div>
            <div class="form-floating mb-3">
              <input type="date" class="form-control id bg border-bottom border-dark form-control border-0 shadow-none" name="apellido" id="apellido" placeholder="name@example.com">
              @error('apellido')
                  <br>
                      <small>*{{$message}}</small>
                  <br>
              @enderror
              <label for="floatingInput">Fecha de nacimmiento</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="id bg border-bottom border-dark form-control border-0 shadow-none" id="fecha_nacimiento" id="fecha_nacimiento" placeholder="">
              @error('fecha_nacimiento')
                  <br>
                      <small>*{{$message}}</small>
                  <br>
              @enderror
              <label for="floatingPassword">Telefono</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="id bg border-bottom border-dark form-control border-0 shadow-none" id="telefono" id="telefono" placeholder="">
              @error('telefono')
                  <br>
                      <small>*{{$message}}</small>
                  <br>
              @enderror
              <label for="floatingPassword">Direcccion</label>
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit">Continuar  <i class="bi bi-box-arrow-in-right"></i></button>
            <hr class="my-4">
        </form>
      </div>
      <div class="col-md-4 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" class="img-fluid" alt="Responsive image" width="500" height="800" xmlns="https://i.ibb.co/QFgW23G/fondo.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x800</text></svg> -->
        <img src="https://i.ibb.co/b11tpP9/vertical-mochila.jpg" class="borders" width="450" height="600" alt="">
      </div>
    </div>
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
.borders{
  border-radius: 20px;
}
</style>

@endsection
