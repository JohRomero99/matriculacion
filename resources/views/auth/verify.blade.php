@extends('layouts.plantilla')

@section('content')

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

</body>
</html>

@endsection

  

