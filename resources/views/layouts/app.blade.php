<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- HEAD IMPORT --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,700|Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    {{-- END HEAD IMPORT --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cheramel Design</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
</head>
<header class="encabezado">
<nav class="navlog">
        <ul class="navbar ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item registerLogin">
                    <a class="nav-link status-bar" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                </li>
                <label class="registerLoginDivisor" for="">|</label>
                @if (Route::has('register'))
                    <li class="nav-item registerLogin">
                        <a class="nav-link status-bar" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    </li>
                @endif
            @else
            <label for="" class = "itemsCounter">{{$count}}</label>
                <a href="/cart/{{Auth::user()->id}}"><img src="/images/cart1.png" class="cart" alt="Mini Cart"></a>
                <a href="/profile/edit/{{Auth::user()->id}}"><img src="/storage/{{ Auth::user()->avatar }}" class="miniAvatar" alt="Mini Avatar"></a>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle status-bar" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="MenuDesplegableLogOut" href="/profile/edit/{{Auth::user()->id}}">
                            {{ __('Perfil') }}
                        </a>
                        <a class="MenuDesplegableLogOut" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>
</header>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/LOGO_4.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto section-nav">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-md-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/home">INICIO <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/products">PRODUCTOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">CONTACTANOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/aboutus">QUIÉNES SOMOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/faqs">PREGUNTAS FRECUENTES</a>
                                </li>
                                @if(Auth::check())
                                    @if(auth()->user()->role == 3)
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin">ADMINISTRAR</a>
                                        </li>
                                    @endif
                                @endif
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid p-0">
            @yield('content')
            <footer>
                <section class="__wrapper-contact">
                    <div class="row __max-width px-md-4">
                        <article class="col-12 text-center col-sm-6 text-sm-left text-md-left col-lg-3 textofoot">
                            <h4>CONTACTANOS</h4>
                            <p><strong>cherameliedg@gmail.com</strong><br>☏ +54 11 1234 5678</p>
                        </article>
                        <article class="col-12 text-center col-sm-6 text-sm-left text-md-left col-lg-3 textofoot">
                            <h4>DIRECCION</h4>
                            <p><strong>Calle Falsa 123</strong><br>CABA</p>
                        </article>
                        <article class="col-12 text-center col-sm-6 text-sm-left text-md-left col-lg-3 textofoot">
                            <h4>HORARIOS</h4>
                            <p><strong>Lunes a Viernes</strong><br>De 9:00 a 20:00 hs</p>
                        </article>
                        <article class="col-12 text-center col-sm-6 text-sm-left text-md-left col-lg-3 textofoot">
                            <h4>PROMOCIONES</h4>
                            <p><strong>12 Cuotas sin interes </strong><br>VIERNES, SÁBADOS Y DOMINGOS</p>
                        </article>
                        <article class="col-12 col-sm-12 col-lg-12">
                            <div class="redes">
                                <a href="http://www.facebook.com"><img class="size" src="{{ asset('images/facebook.png') }}" alt="facebook"></a>

                                <a href="http://www.instagram.com"><img class="size" src="{{ asset('images/instagram.png') }}" alt="instagram"></a>

                                <a href="https://web.whatsapp.com/send?phone=+541166793520&text=Hola!"><img class="sizedesktop" src="{{ asset('images/whatsapp.png') }}" alt="whatsapp"></a>

                                <a href="https://wa.me/541166793520?text=Hola"><img class="sizemobile" src="{{ asset('images/whatsapp.png') }}" alt="whatsapp"></a>
                            </div>
                        </article>
                    </div>
                </section>
                <section class="__wrapper-copyright">
                    <div class="row __max-width">
                        <div class="col-12 text-center">
                            <small>© 2019 <strong>Cheramel</strong>. Todos los derechos reservados</small>
                        </div>
                    </div>
                </section>
            </footer>
        </div>
</body>
</html>