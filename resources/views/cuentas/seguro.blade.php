@extends('adminlte::page')

@section('content')

<div class="container">

      <div class="row justify-content-center"> 
        <div class="form-group col-md-4 mt-2 text-center">
            <label for="inputState text-center">Estudiante</label>
          <select id="inputState" class="form-control">
              <option selected>John Romero</option>
              <option>Anthony Loor </option>
          </select>
          <button class="btn btn-secondary mt-3">Actualizar</button>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4 mt-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted mx-auto">  <i class="bi bi-bag-check"></i></span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Ambiente Digital</h6>
                <small class="text-muted">Anual</small>
              </div>
              <span class="text-muted">$42</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong class="saldo" oninput="cal()">42</strong>
            </li>
          </ul>

          <form class="card p-2 border-0">
            <div class="input-group">
              <!-- <div class="input-group">
                <button type="submit" class="btn btn-dark w-100 mx-auto bg-light">Continuar <i class="bi bi-credit-card"></i></button>
              </div> -->
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-dark w-100 mx-auto bg-dark" data-toggle="modal" data-target="#exampleModalCenter" onclick="btTutorial.disabled = !this.checked">
                    Continuar  <i class="fas fa-fw fa-credit-card"></i>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Pago seguro con Paymentez</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row gy-3">
                            <div class="col-md-6">
                              <label for="cc-name" class="form-label">Nombre en la tarjeta</label>
                              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                              <small class="text-muted">Nombre completo como se muestra en la tarjeta</small>
                              <div class="invalid-feedback">
                                Se requiere el nombre en la tarjeta
                              </div>
                            </div>

                            <div class="col-md-6">
                              <label for="cc-number" class="form-label">Número de Tarjeta de Crédito</label>
                              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                              <div class="invalid-feedback">
                                Se requiere el nombre en la tarjeta
                              </div>
                            </div>

                            <div class="col-md-3">
                              <label for="cc-expiration" class="form-label">Vencimiento</label>
                              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                              <div class="invalid-feedback">
                                Se requiere el nombre en la tarjeta
                              </div>
                            </div>

                            <div class="col-md-3">
                              <label for="cc-cvv" class="form-label">CVV</label>
                              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                              <div class="invalid-feedback">
                                Se requiere el nombre en la tarjeta
                              </div>
                            </div>

                            <div class="col-md-12 text-center">
                              <button type="button" class="saldo btn btn-dark w-50 mx-auto bg-dark mt-3" oninput="cal()" data-toggle="modal" data-target="#exampleModalCenter">
                                $42 <i class="fas fa-fw fa-credit-card"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-check mx-auto mt-1">
                  <input class="check form-check-input" type="checkbox" value="" id="check">
                  <label class="form-check-label" for="flexCheckDefault">
                    Términos y condiciones <a href="#" >Ver aquí</a>
                  </label>
                </div>
            </div>

          </form>
        </div>
        <div class="col-md-8 order-md-1 mt-5">

        <table class="table bg-white border">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Descripcion</th>
              <th scope="col">Fecha de vencimiento</th>
              <th scope="col">Valor</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <!-- <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div> -->
                
              </th>
              <td>Ambiente Digital</td>
              <td>10/05/2022</td>
              <td>$42</td>
              <td>Pendiente</td>
            </tr>
            <tr>
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

<!-- <script>
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

      const collection = document.getElementsByClassName("saldo");
      collection[0].innerHTML = total;
      collection[1].innerHTML = total;
    
  } catch (e) {}
}
</script> -->

@endsection

