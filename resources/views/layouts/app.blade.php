<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vasco Soares') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top shadow-sm">
            <div class="container">
               <a class="navbar-brand" href="{{ url('/accueil') }}">
                     <img class ="navbar-brand" src="{{asset('./assets/logo192.png')}}" alt="Vasco Soares logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                       
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Menu Links -->
                        <li class="nav-item"><a class="nav-link" href="{{asset('accueil')}}">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{asset('services')}}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{asset('matieres')}}">Matières</a></li> 
                        <li class="nav-item"><a class="nav-link" href="{{asset('about')}}">A propos</a></li> 
                        @if(Auth::guest())
                            <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Recrutement</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{asset('recrutement')}}">Recrutement</a></li>
                        @endif 
                        <li class="nav-item"><a class="nav-link" href="{{asset('contact')}}">Contact</a></li>
                        <!-- Authentication Links --> 
                        @guest
                            <li class="nav-item ml-4">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form>
                                    <!-- @if (Auth::user()->role == "admin")
                                    <a class="dropdown-item" href="{{route('admin.users.index')}}">Liste des utilisateurs</a>
                                    @endif -->
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
 @include('_footer')
</body>
</html>
