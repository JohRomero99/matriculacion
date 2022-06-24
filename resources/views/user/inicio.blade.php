@extends('layouts.plantilla')

@section('content')     

<div class="container-fluid w-75 d-flex justify-content-start mt-5">
    <h4>Hola, john <i class="bi bi-hand-thumbs-up-fill text-secondary"></i></h4>
</div>

<div class="container-fluid d-flex justify-content-center mt-5">
    <div class="card w-75 h-100 " >
        <div class="card-header">
            <h5 class="mt-2" >Representanto(a)(s)</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center">
            John Jairo Romero Sanchez
                <button class="btn btn-outline-dark" >administrar</button>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
            Jose Carlos Romero Sanchez
                <button class="btn btn-outline-dark" >administrar</button>
            </li>
        </ul>
    </div>
</div>

@endsection