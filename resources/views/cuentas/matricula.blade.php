@extends('adminlte::page')

@section('content')

@extends('head')

  <div class="container">
      <!-- <div class="row justify-content-center"> 
        <div class="form-group col-md-4 mt-2 text-center">
            <label for="inputState text-center">Estudiante</label>
          <select id="inputState" class="form-control text-center">
              <option selected>John Romero</option>
              <option>Anthony Loor </option>
          </select>
          <button class="btn btn-secondary mt-3">Actualizar</button>
        </div>
      </div> -->
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4 mt-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted mx-auto"> Carrito <i class="bi bi-bag-check"></i></span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Matrícula</h6>
                <small class="text-muted">Anual</small>
              </div>
              <span class="text-muted saldo" oninput="cal()">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Pensión</h6>
                <small class="text-muted"></small>
              </div>
              <span class="saldo" oninput="cal()">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong class="saldo">0</strong>
            </li>
          </ul>
            <div class="input-group">
              <div class="input-group">
                <button class="js-payment-checkout btn btn-dark w-100">Pagar con tarjeta</button>
                <div id="response"></div>
              </div>
                <div class="form-check mx-auto mt-1">
                  <input class="check form-check-input" type="checkbox" value="" id="check">
                  <label class="form-check-label" for="flexCheckDefault">
                    Términos y condiciones <a href="#" >Ver aquí</a>
                  </label>
                </div>
            </div>
        </div>
        <div class="col-md-8 order-md-1 mt-5">
          <table class="table bg-white border">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Fecha de vencimiento</th>
                  <th scope="col">Valor.</th>
                  <th scope="col">Valor</th>
                  <!-- <th scope="col">Estado</th> -->
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="mt-3" ></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v1" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark" id="myBtn" >Agregar <i id="i" class="bi bi-cart4"></i></button></td>
                </tr>
                <th scope="row"></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v12" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark">Agregar <i class="bi bi-cart4"></i></button></td>
                </tr>
                <th scope="row"></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v3" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark">Agregar <i class="bi bi-cart4"></i></button></td>
                </tr>
                <th scope="row"></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v4" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark">Agregar <i class="bi bi-cart4"></i></button></td>
                </tr>
                <th scope="row"></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v5" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark">Agregar <i class="bi bi-cart4"></i></button></td>
                </tr>
                <th scope="row"></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v6" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark">Agregar <i class="bi bi-cart4"></i></button></td>
                </tr>
                <th scope="row"></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v7" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark">Agregar <i class="bi bi-cart4"></i></button></td>
                </tr>
                <th scope="row"></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v8" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark">Agregar <i class="bi bi-cart4"></i></button></td>
                </tr>
                <th scope="row"></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v9" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark">Agregar <i class="bi bi-cart4"></i></button></td>
                </tr>
                <th scope="row"></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v10" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark">Agregar <i class="bi bi-cart4"></i></button></td>
                </tr>
                <th scope="row"></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v11" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark">Agregar <i class="bi bi-cart4"></i></button></td>
                </tr>
                <th scope="row"></th>
                  <td>Matricula</td>
                  <td>10/05/2022</td>
                  <td>$109</td>
                  <td class="w-25" style="padding-left: 0;" ><input type="text" class="form-control w-50"  value="109" id="v12" oninput="cal()"></td>
                  <td><button class="btn btn-outline-dark">Agregar <i class="bi bi-cart4"></i></button></td>
                </tr>
              </tbody>
              <tfoot>
                    
              </tfoot>
          </table>
        </div>
      </div>
    </div>


<script>
    var myCard = $('#my-card');
    var cardToSave = myCard.PaymentForm('card');
    if(cardToSave == null){
        alert("Invalid Card Data");
       }
</script>

<script>
    /**
  * Init library
  *
  * @param env_mode `prod`, `stg`, `local` to change environment. Default is `stg`
  * @param payment_client_app_code provided by Paymentez.
  * @param payment_client_app_key provided by Paymentez.
  */
  Payment.init('stg', 'TPP3-EC-CLIENT', 'ZfapAKOk4QFXheRNvndVib9XU3szzg');
</script>

<script>
    /* Add Card converts sensitive card data to a single-use token which you can safely pass to your server to charge the user.
 *
 * @param uid User identifier. This is the identifier you use inside your application; you will receive it in notifications.
 * @param email Email of the user initiating the purchase. Format: Valid e-mail format.
 * @param card the Card used to create this payment token
 * @param success_callback a callback to receive the token
 * @param failure_callback a callback to receive an error
 * @param payment_form Payment Form instance
 */
Payment.addCard(uid, email, cardToSave, successHandler, errorHandler, myCard);

var successHandler = function(cardResponse) {
  console.log(cardResponse.card);
  if(cardResponse.card.status === 'valid'){
    $('#messages').html('Card Successfully Added<br>'+
                  'status: ' + cardResponse.card.status + '<br>' +
                  "Card Token: " + cardResponse.card.token + "<br>" +
                  "transaction_reference: " + cardResponse.card.transaction_reference
                );    
  }else if(cardResponse.card.status === 'review'){
    $('#messages').html('Card Under Review<br>'+
                  'status: ' + cardResponse.card.status + '<br>' +
                  "Card Token: " + cardResponse.card.token + "<br>" +
                  "transaction_reference: " + cardResponse.card.transaction_reference
                ); 
  }else{
    $('#messages').html('Error<br>'+
                  'status: ' + cardResponse.card.status + '<br>' +
                  "message Token: " + cardResponse.card.message + "<br>"
                ); 
  }
  submitButton.removeAttr("disabled");
  submitButton.text(submitInitialText);
};

var errorHandler = function(err) {    
  console.log(err.error);
  $('#messages').html(err.error.type);    
  submitButton.removeAttr("disabled");
  submitButton.text(submitInitialText);
};
</script>

<script>
  let paymentCheckout = new PaymentCheckout.modal({
    client_app_code: 'TPP3-EC-CLIENT', // Client Credentials
    client_app_key: 'ZfapAKOk4QFXheRNvndVib9XU3szzg', // Client Credentials
    locale: 'es', // User's preferred language (es, en, pt). English will be used by default.
    env_mode: 'stg', // `prod`, `stg`, `local` to change environment. Default is `stg`
    onOpen: function () {
      console.log('modal open');
    },
    onClose: function () {
      console.log('modal closed');
    },
    onResponse: function (response) { // The callback to invoke when the Checkout process is completed

        // In Case of an error, this will be the response.
        response = {
          "error": {
            "type": "Server Error",
            "help": "Try Again Later",
            "description": "Sorry, there was a problem loading Checkout."
          }
        }

        // When the User completes all the Flow in the Checkout, this will be the response.}
        response = {
          "transaction":{
              "status": "success", // success or failure
              "id": "CB-81011", // transaction_id
              "status_detail": 3 // for the status detail please refer to: https://paymentez.github.io/api-doc/#status-details
          }
        }
  
      console.log('modal response');
      document.getElementById('response').innerHTML = JSON.stringify(response);
    }
  });

  let btnOpenCheckout = document.querySelector('.js-payment-checkout');
  btnOpenCheckout.addEventListener('click', function () {
    paymentCheckout.open({
      user_id: '1234',
      user_email: 'jhon@doe.com', //optional
      user_phone: '7777777777', //optional
      order_description: '1 Green Salad',
      order_amount: 40,
      order_vat: 0,
      order_reference: '#234323411',
      //order_installments_type: 2, // optional: The installments type are only available for Ecuador and Mexico. The valid values are: https://paymentez.github.io/api-doc/#payment-methods-cards-debit-with-token-base-case-installments-type
      //order_taxable_amount: 0, // optional: Only available for Ecuador. The taxable amount, if it is zero, it is calculated on the total. Format: Decimal with two fraction digits.
      //order_tax_percentage: 10 // optional: Only available for Ecuador. The tax percentage to be applied to this order.
    });
  });

  window.addEventListener('popstate', function () {
    paymentCheckout.close();
  });
</script>

</body>

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
.main-header{
  z-index: 1;
}
</style>

@section('css')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@stop
@section('js')
   <script>
      document.getElementById("myBtn").addEventListener("click", cambio);

      function cambio() {
        document.getElementById("myBtn").innerHTML = "Agregado";
        // i.classList.remove("bi bi-cart4");
        // i.classList.add("bi bi-bag-check-fill");
        document.getElementById("i").classList.className("bi bi-bag-check-fill");
      }
   </script>
@stop

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

</html>

@endsection

