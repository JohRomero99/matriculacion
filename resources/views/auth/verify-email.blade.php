@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="card text-center mt-5">
    <div class="card-header bg-secondary text-white">
        <h4 class="mt-1 mb-0 " >Validación de Correo Electrónico</h4> 
    </div>
    <div class="card-body">
        <!-- <h5 class="card-title">Hola, John</h5> -->
        <div class="text-center">1.- Abre el mensaje que te hemos enviado a tu bandeja de entrada</div>
        <p class="text-center m-2"><strong>{{ Auth::user()->email }}</strong></p>
        <div class="container mt-3">
            <div class="text-center">2.- Pulsa en el botón "Confirme su dirección de correo Electrónico"</div>
            <div class="text-center">Así confirmaremos que tu correo es válido</div>
        </div>
        <!-- <div class="text-center mt-1"><strong>Si tu correo ha llegado el correo de verificación puedes solicitar otro;</strong></div> -->
        <!-- <form class="d-inline d-flex justify-content-center" method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-outline-secondary mt-1">{{ __('haga clic aquí para solicitar otro') }}</button>.
        </form> -->
        <!-- <form method="POST" action="{{ route('actualizar.correo') }}">
            @csrf
            <div class="text-center mt-1"><strong>Si Ingresaste un correo erroneo puedes cambiarlo aquí:</strong></div>
            <div class="">
                <input type="text" name="email" id="email" class="text-center id bg form-control shadow-none border-0 mt-2 w-100 @error('password') is-invalid @enderror">   
                @error('email')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                @enderror
            </div>
            <div class="text-center">
                <button class="btn btn-outline-secondary mt-2">Actualizar</button>
            </div>
        </form> -->
    </div>
    <!-- <div class="card-footer text-muted">
        El enlace tiene validez hasta 1 día
    </div> -->

    <div id="accordion">
  <div class="card">
    <div class="card-header bg-secondary" id="headingOne">
      <h5 class="mb-0"> 
        <button class="btn text-white show shadow-none border-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          ¿El enlace no ha llegado a tu correo?. Puedes solicitar otro aquí.
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <form class="d-inline d-flex justify-content-center" method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="text-center" >Da click para generar un nuevo enlace</div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-secondary mt-1 show">{{ __('Generar nuevo enlace') }}</button>.
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header bg-secondary" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn collapsed text-white shadow-none border-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ¿Ingresaste un correo erroneo?. Puedes cambiarlo aquí.
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <form method="POST" action="{{ route('actualizar.correo') }}">
            @csrf
            <div class="text-center mt-1"><strong>Ingresa el nuevo correo:</strong></div>
            <div class="d-flex justify-content-center mr-3">
                <input type="text" name="email" id="email" class="text-center id bg form-control shadow-none border-0 border-bottom border-dark mt-2 w-50 @error('password') is-invalid @enderror" placeholder="ejemplo@gmail.com">   
                <div>.</div>
                <div class="text-center">
                    <button class="btn btn-outline-secondary mt-2"><i class="fa-solid fa-arrows-rotate"></i></button>
                </div>
            </div>
            @error('email')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <small>*El nuevo correo no puede ser el mismo que tienes actualmente</small>
        </form>
      </div>
    </div>
  </div>
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
@if(session('success') == 'Correo Actualizado Correctamente' )
    <script>
    Swal.fire({
    icon: 'success',
    title: 'Exito',
    text: 'Correo Actualizado Correctamente',
    })
    </script>
@endif
@if(session('mensaje') == '¡Enlace de verificación reenviado!' )
    <script>
    Swal.fire({
    icon: 'success',
    title: '¡Enlace de verificación reenviado!',
    text: 'Revisa tu bandeja de entrada',
    })
    </script>
@endif
@if(session('mensaje') == 'Correo Registrado correctamente' )
    <script>
    Swal.fire({
    icon: 'success',
    title: 'Exito',
    text: 'Correo registrado correctamente',
    })
    </script>
@endif
@if ($errors->any())
    <script>
    Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Ocurrió un error al actualizar el correo',
    })
    </script>
@endif

@endsection


