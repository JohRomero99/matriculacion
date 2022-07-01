<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iconos/VirgenNSC.ico" type="image/x-icon">
    <title>Registro</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Iconos bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-0 mb-2">
    <div class="container">
        <a class="navbar-brand"  href="{{ url('/') }}">
            <img src="https://i.ibb.co/CQpVr0x/Virgen-NSC.png" width="50" height="50">
                 Nuestra Señora Del Carmen
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <!-- @guest -->
                    @if ( Request::route()->getName() == 'verificar' )
                    <li class="nav-item">
                        <a class="nav-link text-dark disabled" href="#"  style='border-right: 1px solid #000;' >{{ __('Identificación') }}
                            <img src="https://i.ibb.co/bPpSXcb/numero-uno.png" width="26" height=26" class="d-inline-block align-top" alt="">
                        </a>
                    </li>
                        <a class="nav-link text-dark disabled opacity-25" href="#">{{ __('Creación de usuario') }}
                            <img src="https://i.ibb.co/NNjYNvP/numero-2.png" width="26" height=26" class="d-inline-block align-top" alt="">
                        </a>
                    </li>
                    @endif
                    @if ( Request::route()->getName() == 'register.verificar')
                    <li class="nav-item">
                        <a class="nav-link text-dark disabled opacity-25" href="#"  style='border-right: 1px solid #000;' >{{ __('Identificación') }}
                            <img src="https://i.ibb.co/bPpSXcb/numero-uno.png" width="26" height=26" class="d-inline-block align-top" alt="">
                        </a>
                    </li>
                        <a class="nav-link text-dark disabled" href="#">{{ __('Creación de usuario') }}
                            <img src="https://i.ibb.co/NNjYNvP/numero-2.png" width="26" height=26" class="d-inline-block align-top" alt="">
                        </a>
                    </li>
                    @endif
                <!-- @else
                  <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                       <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Salir') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                    </li>
                @endguest -->
            </ul>
        </div>
    </div>
</nav>

<div class="" >
    @include('flash-message')
    @yield('content')
</div>

<style>
  body{
    /* background-color: #e8eaf6; */
    background-image: url("https://investigarte.in/wp-content/uploads/2022/06/boseto.png")
  }
  
  .disabled { 
    pointer-events: none;
    cursor: default;
  }

</style>

</body>

</div>