@extends('adminlte::page')

@section('content')

<div class="container">

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4 mt-5">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted mx-auto">Carrito  <i class="bi bi-bag-check"></i></span>
            <span class="badge badge-secondary badge-pill">3</span>
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
              <strong>$141</strong>
            </li>
          </ul>

          <form class="card p-2 border-0">
            <div class="input-group">
              <!-- <input type="text" class="form-control border-0 shadow-none border-bottom border-dark" placeholder="Promo code"> -->
              <div class="input-group">
                <button type="submit" class="btn btn-dark w-100 mx-auto bg-light">Continuar <i class="bi bi-credit-card"></i></button>
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
              <td>$109</td>
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
              <td>$109</td>
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
              <td>$109</td>
              <td>Pendiente</td>
            </tr>

          </tbody>
          <tfoot>
            
            <tr>
              <th scope="row">Total</th>
              <td></td>
              <td></td>
              <td>$327</td>
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

@endsection
