@extends('adminlte::page')

@section('content')

<div class="container">

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4 mt-5">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted mx-auto">Carrito  <i class="bi bi-bag-check"></i></span>
            <span class="badge badge-secondary badge-pill">2</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Pension Mes de Enero</h6>
                <small class="text-muted">fecha Vencimiento: 30/01/2022</small>
              </div>
              <span class="text-muted">$109</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Matricula</h6>
                <small class="text-muted">Anual</small>
              </div>
              <span class="text-muted">$42</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong class="saldo" oninput="cal()"></strong>
            </li>
          </ul>

          <form class="card p-2 border-0">
            <div class="input-group">
              <!-- <div class="input-group">
                <button type="submit" class="btn btn-dark w-100 mx-auto bg-light">Continuar <i class="bi bi-credit-card"></i></button>
              </div> -->
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-dark w-100 mx-auto bg-dark" data-toggle="modal" data-target="#exampleModalCenter">
                    Continuar <i class="bi bi-credit-card"></i>
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
                              <button type="button" class="saldo btn btn-dark w-50 mx-auto bg-dark mt-3" data-toggle="modal" data-target="#exampleModalCenter">
                                
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-check mx-auto mt-1">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Términos y condiciones
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
              <th scope="col">Mes</th>
              <th scope="col">F. Vencimiento</th>
              <th scope="col">Valor</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody>
            
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Enero</td>
              <td>25/03/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " id="v1" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Febrero</td>
              <td>30/04/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 "  id="v2" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Marzo</td>
              <td>31/05/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v3" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Abril</td>
              <td>31/05/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v4" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Mayo</td>
              <td>31/05/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v5" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Junio</td>
              <td>31/05/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v6" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Julio</td>
              <td>31/05/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v7" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Agosto</td>
              <td>31/05/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v8" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Septiembre</td>
              <td>31/05/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v9" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Octubre</td>
              <td>31/05/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v10" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Novimebre</td>
              <td>31/05/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v11" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
              </th>
              <td>Diciembre</td>
              <td>31/05/2022</td>
              <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50 " value="109" id="v12" oninput="cal()"></td>
              <td>Pendiente</td>
            </tr>

          </tbody>
          <tfoot>
            
            <tr>
              <th scope="row">Total</th>
              <td></td>
              <td></td>
              <td class="w-25" style="padding-left: 0;" ><strong class="saldo" oninput="cal()"></strong></td>
              <td></td>
            </tr>

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

      const collection = document.getElementsByClassName("saldo");
      collection[0].innerHTML = total;
      collection[1].innerHTML = total;
    
  } catch (e) {}
}
</script>

@endsection
