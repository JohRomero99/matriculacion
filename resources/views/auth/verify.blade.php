@extends('layouts.plantilla')

@section('content')

<div class="container col-xl-10 col-xxl-8 px-4 py-1">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Verifica tu Código</h1>
        <p class="col-lg-10 fs-4 fw-bold"> Realiza los siguientes pasos: </p>
        <p class="col-lg-10 fs-4">-La cédula no deberá contenter números.</p>
        <p class="col-lg-10 fs-4">-Digita el código que fue proporcionado por tu docente. Ej: GcFRjGwXXXXB</p>
        
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="{{route('verificar.codigo')}}" class="p-4 p-md-5 border rounded-3 bg-light" method="POST">
          @csrf
            <div class="mb-3">
                <div class="form-floating mb-3">
                  <input type="text" class="bg id form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('cedula') is-invalid @enderror" placeholder=" " name="cedula" id="cedula">
                  @error('cedula')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                  @enderror
                  <!-- @error('cedula')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror -->
                  <label for="floatingInput">Cédula</label>
                  <!-- <div id="emailHelp" class="form-text">- Ej: 096.....2422</div> -->
                  <div class="d-flex justify-content-center">
                </div>
                <div class="form-floating mb-3 mt-3">
                  <input type="text" class="bg id form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('codigo') is-invalid @enderror"  placeholder=" " name="codigo" id="codigo">
                  @error('codigo')
                    <br>
                        <small>*{{$message}}</small>
                    <br>
                  @enderror
                  <!-- @error('codigo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror -->
                  <label for="floatingPassword">Código</label>
                  <!-- <div id="emailHelp" class="form-text">- Ej: XddRF.....cD</div>
                  <div id="emailHelp" class="form-text">- ¡No compartas tu código con nadie!</div> -->
                </div>
                <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Verificar   <i class="bi bi-person-check"></i></button>
                <hr class="my-4">
                <small class="text-muted d-flex justify-content-center">NSC- Nuestra Señora Del Carmen</small>
            </div>
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
</body>
</html>

@endsection

  

<!-- <div id="emailHelp" class="form-text">- ¡No compartas tu código con nadie!</div>
                  <div id="emailHelp" class="form-text">- Ej: AbcF....xYz</div>
                  <div id="emailHelp" class="form-text">- El código solo deberá ser ingresa una vez</div>
                  <div class="d-flex justify-content-center">
                  <label for="exampleInputEmail1" class="form-label mt-3"> <strong>Digita tu cédula*</strong> </label>


                                      <div id="emailHelp" class="form-text">- Cedula del representante</div>
                    <div id="emailHelp" class="form-text">- No letras</div> -->

