@extends('adminlte::page')

@section('content')   

@include('flash-message')
<div class="container-fluid d-flex justify-content-center">
    <div class="card bg-light mb-3 m-3 mt-5" style="max-width: 27rem;">
        <div class="card-header bg-secondary">Matrícula  <i class="fas fa-fw fa-credit-card"></i> </div>
        <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="text-center">
            <a class="btn btn-secondary w-50 mb-4" href="{{ route('paymentez') }}">Acceder</a>
        </div>
        <div class="card-footer text-muted text-center">
            Saldo Pendiente: 
        </div>
    </div>
</div>

@if(session('correo') == 'Correo verificado con éxito' )
    <script>
    Swal.fire({
    icon: 'success',
    title: 'Exito',
    text: 'Correo verificado con éxito',
    })
    </script>
@endif

@section('css')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stop

@endsection