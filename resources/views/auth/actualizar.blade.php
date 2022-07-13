@extends('adminlte::page')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
<div class="conatiner">

</div>
        
    
<div class="row">
    <div class="col-4 m-3 mt-1 mx-auto bg-white">
        <img id="circulo" class="bg-light border mx-auto mt-3"  src="{{ asset(Auth::user()->imagen) }}" width="150" height="150"  alt="">
        <div class="mb-3">
        <form action="{{ route('subir.imagen') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-center"><label for="" class="form-label mt-3">Selecciona una foto para tu Perfil</label></div>    
            <input name="file" class="form-control h-50 border-0 mb-0" type="file" id="formFile" accept="image/*">
            <div class="text-center">
                <small>La imagen debe tener un tamaño maximo de 7mb.</small> <br>
                <small>Puedes reducir el tamaño de tu imagen <a href="https://www.iloveimg.com/es/comprimir-imagen/comprimir-jpg" target="_blank" >aquí.</a></small> 
            </div>
                @error('file')
                    <br>
                        <small class="text-center" >*{{$message}}</small>
                    <br>
                @enderror
            </div>
            <div class="text-center">
                <button class="btn btn-secondary">Actualizar Imagen</button>
            </div>
        </form>
    </div>
    <div class="col-7 bg-light rounded mt-3 d-flex justify-content-center">
    
    <div class="row">
        <div class="col-12">
            <div class="container bg-white">
            <form action="{{ route('actualizar.correo') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <label for="" class="mt-2">Correo</label>
                        <input type="text" name="email" id="email" value="{{ $user->email }}" class="mt-2 h form-control w-100 mt-1 id bg border-0 shadow-none" onclick="mensaje()" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com">
                        @error('email')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror
                        <small>Si actualisas de correo antes tendrás que validarlo</small>
                        </div>
                    <div class="col-4">
                        <button class= "h btn btn-secondary w-100 mt-5" >Actualizar</button>
                    </div>
                </div>
            </form> 
            </div>
        </div>

        <div class="col-12">
            <hr>
        </div>

        <div class="col-12">
            <div class="container bg-white">
                <form action="{{ route('actualizar.datos', $update->id) }}" method="POST"> 
                    @csrf
                    <label for="" class="mt-4" >Nombre</label>
                    <input name="nombre" id="nombre" type="text" value="{{ $update->nombre }}"  class="h form-control w-100 mt-1 id bg border-0 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nombre..." >
                    @error('nombre')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <label for="" class="mt-3">Apellido</label>
                    <input name="apellido" id="apellido" type="text" value="{{ $update->apellido }}" class="h form-control w-100 mt-1 id bg border-0 shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="apellido...">
                    @error('apellido')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <label for="" class="mt-3">Teléfono</label>
                    <input name="telefono" id="telefono" type="text" value="{{ $update->telefono }}" class="h form-control w-100 mt-1 id bg border-0 shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0954569745">
                    @error('telefono')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <label for="" class="mt-3">Dirrecion</label>
                    <input name="direccion" id="direccion" type="text" value="{{ $update->direccion }}" class="h form-control w-100 mt-1 id bg border-0 shadow-none mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Flor de Bastion">
                    @error('direccion')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <div class="text-center">
                        <button class="btn btn-secondary mt-3 mb-3 w-25" >Actualizar  <i class="fas fa-fw fa-right-to-bracket"></i></button>
                    </div>
                </form>
            </div>
            </div>
        </div>

    </div>
</div>
            <!-- <div class="text-center">
                <button class="btn btn-secondary mt-3 mb-3 w-25" >Actualizar  <i class="fas fa-fw fa-right-to-bracket"></i></button>
            </div> -->
        
<!-- </div> -->


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
    border-bottom: 1px solid #000 !important;
  }
.h{
    height: 45px;
}
</style>

@if(session('datos') == 'Datos actualizados correctamente' )
    <script>
    Swal.fire({
    icon: 'success',
    title: 'Exito',
    text: 'Datos actualizados correctamente',
    })
    </script>
@endif
@if(session('foto') == 'Foto actualizada con éxito' )
    <script>
    Swal.fire({
    icon: 'success',
    title: 'Exito',
    text: 'Foto actualizada con éxito',
    })
    </script>
@endif

@section('js')
<script>
    function mensaje() {
        Swal.fire({
        icon: 'warning',
        title: 'Atención',
        text: 'Si actualizas tu correro tendrá que validarlo nuevamente',
        })
    }
</script>
@stop

@section('css')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stop

@endsection
