@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col mt-5">
            <div class="d-flex justify-content-center align-items-center">
                <img src="https://i.ibb.co/TczhS4z/proteger.png" class="" width="400" height="400"  >
            </div>
        </div>
        <div class="col">
            <div class="card mt-5">
                <div class="card-header display-6 text-center"><strong>{{ __('Verifique su dirección de correo electrónico') }}</strong></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                        </div>
                    @endif

                    <div class="text-center"><strong>1.- Abre el mensaje que te hemos enviado a:</strong></div>
                    <p class="text-center m-2">{{ Auth::user()->email }}</p>
                    <div class="container mt-3">
                        <div class="text-center"><strong>2.- Pulsa en el botón "Confirmar email"</strong></div>
                        <div class="text-center">Así confirmaremos que tu email</div>
                    </div>
                
                    <!-- {{ __('Antes de continuar, verifique su correo electrónico para obtener un enlace de verificación.') }}
                    {{ __('Si no recibiste el correo electrónico') }}, -->
                    <form class="d-inline d-flex justify-content-center" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('haga clic aquí para solicitar otro') }}</button>.
                    </form>
                    <div class="contador d-flex justify-content-center" id="ten-countdown"></div>
                    <form action="{{ route('verificar.destruir', Auth::user()->id ) }}" method = "GET">
                        @csrf 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div>

<style>
    .contador {
    text-align: center;
    /* border: 5px solid #004853; */
    display:inline;
    padding: 5px;
    color: #004853;
    font-family: Verdana, sans-serif, Arial;
    font-size: 40px;
    font-weight: bold;
    text-decoration: none;
}
</style>

<script>

    function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
            element.innerHTML = "Expirado";
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();

}

countdown( "ten-countdown", 10, 0 );

</script>


@endsection
