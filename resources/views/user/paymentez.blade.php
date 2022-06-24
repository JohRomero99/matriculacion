@extends('layouts.app')

@section('content')

<div class="container mt-5">
      <!-- <div class="py-5 text-center">
        <h2>Checkout form</h2> -->
        <!-- <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
        <!-- <select class="mx-auto w-75 form-select bg-white sahdow-none" id="country" required="">
            <option value="">Choose...</option>
            <option>United States</option>
        </select>
        <button class="btn btn-dark mt-2 w-25">Buscar</button>
      </div> -->

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
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
                <button type="submit" class="btn btn-outline-dark w-100 mx-auto">Continuar <i class="bi bi-credit-card"></i></button>
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
        <div class="col-md-8 order-md-1">

          <table class="table table-striped table-hover border">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Pension</th>
                <th scope="col">Fecha Vencimiento</th>
                <th scope="col">Estado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td>Enero</td>
                <td>30/01/2022</td>
                <td>Por Pagar</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td>Enero</td>
                <td>30/01/2022</td>
                <td>Por Pagar</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td>Enero</td>
                <td>30/01/2022</td>
                <td>Por Pagar</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td>Enero</td>
                <td>30/01/2022</td>
                <td>Por Pagar</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td>Enero</td>
                <td>30/01/2022</td>
                <td>Por Pagar</td>
              </tr>
            </tbody>
          </table>



            <!-- <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control id bg border-0 shadow-none border-bottom border-dark" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div> -->
            <!-- <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input id bg border-0 shadow-none border-bottom border-dark" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input id bg border-0 shadow-none border-bottom border-dark" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div> -->

            <!-- <hr class="mb-4"> -->

            <!-- <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Visa</h5>
                  <small>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                      </label>
                    </div>
                  </small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small>hola</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Masterd Card</h5>
                  <small class="text-muted">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Default radio
                    </label>
                  </div>
                  </small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
              </a>
            </div> -->

            <!-- <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control id bg border-0 shadow-none border-bottom border-dark" id="cc-name" placeholder="" required="">
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control id bg border-0 shadow-none border-bottom border-dark" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control id bg border-0 shadow-none border-bottom border-dark" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control id bg border-0 shadow-none border-bottom border-dark" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div> -->
            <!-- <hr class="mb-4"> -->
            <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button> -->
          </form>
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
