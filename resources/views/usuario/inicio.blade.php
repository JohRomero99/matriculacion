@extends('adminlte::page')

@section('content')     

<div class="container-fluid d-flex justify-content-center">
    <div class="card bg-light mb-3 m-3 mt-5" style="max-width: 20rem;">
        <div class="card-header bg-secondary">Matrícula</div>
        <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <!-- <img src="https://i.ibb.co/N2rHfqv/matricula-1.png" width="90" height="80" alt="">             -->
        </div>
            <div class="text-center">
                <button class="btn btn-secondary w-75 mb-4" >Acceder </button>
            </div>
    </div>

    <div class="card bg-light mb-3 m-3 mt-5" style="max-width: 20rem;">
        <div class="card-header bg-secondary">Pensión</div>
        <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-center">
                <button class="btn btn-secondary w-75" >Acceder</button>
            </div>
        </div>
    </div>
</div>

@endsection