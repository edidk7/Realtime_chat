<!DOCTYPE html class="h-100">
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

</head>

<body class="h-100">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    
    <div id="app" class="h-100">
        <b-navbar toggleable="sm" type="dark" variant="dark">
            <b-navbar-brand href="#">{{ config('app.name', 'Laravel') }}</b-navbar-brand>
        
            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
        
            <b-collapse id="nav-collapse" is-nav>
              <b-navbar-nav class="ml-auto">
                @guest
                    <b-nav-item href="{{ route('login') }}">Ingresar</b-nav-item>
                    <b-nav-item href="{{ route('register') }}">Registrar</b-nav-item>
                @else        
                    <b-nav-item-dropdown text="Username" right>
                        <b-dropdown-item href="#" @click="logout">Cerrar sesión</b-dropdown-item>
                    </b-nav-item-dropdown> 
                @endguest                               
              </b-navbar-nav>
            </b-collapse>
            
          </b-navbar>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>