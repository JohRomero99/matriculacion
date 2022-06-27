@extends('adminlte::page')

@section('content')

<div class="conatiner-fuild">
<div class="row">
    <div class="col-4 m-3 mt-5 mx-auto bg-white">
        <!-- <div class="text-center"><label for="">Foto</label></div> -->
        <div id="circulo" class="bg-light border mx-auto mt-3" placeholder=""><h2 class="text-dark">JR</h2></div>
        <div class="mb-3">
        <div class="text-center"><label for="" class="form-label mt-3">Selecciona una foto para tu Perfil</label></div>
            <input class="form-control h-50" type="file" id="formFile">
        </div>
    </div>
    <div class="col-7 bg-white rounded mt-5 d-flex justify-content-center">
        <div class="container">
            <label for="" class="mt-4" >Nombre</label>
            <input type="text" class="form-control w-100 mt-1 id bg border-bottom border-dark form-control border-0 shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nombre..." >
            <label for="" class="mt-3">Apelido</label>
            <input type="text" class="form-control w-100 mt-1 id bg border-bottom border-dark form-control border-0 shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="apellido...">
            <label for="" class="mt-3">Correo</label>
            <input type="text" class="form-control w-100 mt-1 id bg border-bottom border-dark form-control border-0 shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com">
            <label for="" class="mt-3">Telefono</label>
            <input type="text" class="form-control w-100 mt-1 id bg border-bottom border-dark form-control border-0 shadow-none mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0954569745">
        </div>
    </div>
</div>
    <div class="text-center">
        <button class="btn btn-outline-dark mt-3 mb-3" >Guardar</button>
    </div>
</div>


<style>
#circulo {
    width: 10rem;
    height: 10rem;
    border-radius: 50%;
    background: red;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    }
#circulo > p {
	font-family: sans-serif;
	color: white;
	font-size: 1rem;
	font-weight: bold;
}
.id:focus {
    border-bottom: 3px solid #8d4a26 !important;
  }
.bg{
    background: #E8F0FE !important;
  }
</style>

@endsection
