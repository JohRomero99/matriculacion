@extends('adminlte::page')

@section('content')

<div class="container">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4 mt-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted mx-auto">Carrito  <i class="bi bi-bag-check"></i></span>
            <!-- <span class="badge badge-secondary badge-pill">2</span> -->
          </h4>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Matricula</h6>
                <small class="text-muted">Anual</small>
              </div>
              <!-- <span class="text-muted" >$<span class="saldo" oninput="cal()">42</span></span> -->
              <span><div id="s1" oninput="suma()">42</div></span>
            </li>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Pension</h6>
                <small class="text-muted">Mensual</small>
              </div>
              <span><div id="s2" class="suma" oninput="suma()" >1308</div></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong class="suma_total">0</strong>
            </li>
          </ul>

          <form class="card p-2 border-0">
            <div class="input-group">
              <div class="input-group">
                <button type="submit" id="btn" class="btn btn-dark w-100 mx-auto bg-dark" disabled>Pagar con Tarjeta <i class="fas fa-fw fa-solid fa-lock"></i></button>
              </div>
                <div class="form-check mx-auto mt-1">
                  <input class="check form-check-input" type="checkbox" id="check" name="checkbox">
                  <label class="form-check-label" for="flexCheckDefault">
                    Términos y condiciones <a target="_blank" href="https://www.google.com/" >Ver aquí</a>
                  </label>
                </div>
            </div>



          </form>
        </div>
        <div class="col-md-8 order-md-1 mt-4">

        <table class="table bg-white border">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Descripción</th>
              <th scope="col">F. Vencimiento</th>
              <th scope="col">Valor Adeudado</th>
              <th scope="col">Valor a Cancelar</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          <tr>
              <th scope="row">
              </th>
              <td>Matrícula</td>
              <td>25/03/2022</td>
              <td>42</td>
              <td>42</td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Enero</td>
              <td>25/03/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v1" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Febrero</td>
              <td>30/04/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 "  value="109" id="v2" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Marzo</td>
              <td>31/05/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v3" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Abril</td>
              <td>31/05/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v4" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Mayo</td>
              <td>31/05/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v5" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Junio</td>
              <td>31/05/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v6" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Julio</td>
              <td>31/05/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v7" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Agosto</td>
              <td>31/05/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v8" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Septiembre</td>
              <td>31/05/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v9" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Octubre</td>
              <td>31/05/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v10" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Novimebre</td>
              <td>31/05/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v11" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>
            <tr>
              <th scope="row">
              </th>
              <td>Diciembre</td>
              <td>31/05/2022</td>
              <td>109</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v12" oninput="cal()"></td>
              <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
            </tr>

          </tbody>
          <tfoot>
            <!--  -->
          </tfoot>
        </table>
        </div>
      </div>
    </div>

<style>
.id:focus {
  border-bottom: 3px solid #8d4a26 !important;
}
.id:focus {
    border-bottom: 3px solid #8d4a26 !important;
  }
.bg{
    background: #E8F0FE !important;
  }
</style>

<script>
function cal() {
  try {
    var a = parseInt(document.getElementById("v1").value) || 0,
      b = parseInt(document.getElementById("v2").value) || 0
      c = parseInt(document.getElementById("v3").value) || 0,
      d = parseInt(document.getElementById("v4").value) || 0,
      e = parseInt(document.getElementById("v5").value) || 0,
      f = parseInt(document.getElementById("v6").value) || 0,
      g = parseInt(document.getElementById("v7").value) || 0,
      h = parseInt(document.getElementById("v8").value) || 0,
      i = parseInt(document.getElementById("v9").value) || 0,
      j = parseInt(document.getElementById("v10").value) || 0,
      k = parseInt(document.getElementById("v11").value) || 0,
      l = parseInt(document.getElementById("v12").value) || 0;

      // items = document.getElementsByClassName("saldo").value = a + b + c + d + e + f + g + h + i + j + k + l;

      total = a + b + c + d + e + f + g + h + i + j + k + l;

      const collection = document.getElementsByClassName("suma");
      collection[0].innerHTML = total;
    
  } catch (e) {}
}
</script>

<script>
  function suma(){
  try {
    var a = parseInt(document.getElementById("s1").value) || 0,
      b = parseInt(document.getElementById("s2").value) || 0;

      suma_total = a + b;

      const collection = document.getElementsByClassName("suma_total");
      collection[0].innerHTML = suma_total;
    
  } catch (e) {}
}
</script>

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stop
@section('js')
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
   <script>
      document.getElementById("myBtn").addEventListener("click", cambio);

      function cambio() {
        document.getElementById("myBtn").innerHTML = "Agregado";
        document.querySelector("i").classList.remove("bi bi-cart4");
        document.querySelector("i").classList.add("bi bi-bag-check-fill");
      }
   </script>
   <script>
     const $inputchec = document.querySelector('.form-check-input')
      $inputchec.addEventListener('click', function() {
        const seleccion = document.getElementsByName("checkbox");
        for (var i = 0; i < seleccion.length; i++) {
          if (seleccion[i].checked == true) {
            document.getElementById("btn").disabled = false;
            break;
          } else {
            document.getElementById("btn").disabled = true;
          }
        }
      });
   </script>

@stop

@endsection
