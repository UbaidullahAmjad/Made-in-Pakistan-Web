<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <v-toolbar fixed color="green">
            <v-app-bar-nav-icon>
                
            </v-app-bar-nav-icon>
            <v-toolbar-title> LChat</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-sm-and-down">
                    @guest
                        <v-btn text href="{{ route('login') }}">Login</v-btn>
                        <v-btn text href="{{ route('register') }}">Register</v-btn>
                    @else
                        {{-- <v-btn text href="{{route('home')}}"> Group</v-btn> --}}
                        {{-- <v-btn text href="{{route('private')}}"> Private</v-btn> --}}
                        <v-btn text> {{ Auth::user()->name }}</v-btn>
                        <v-btn text
                        @click=" $refs.logoutForm.submit(); ">
                        Logout</v-btn>
                    @endguest
                    <form ref="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
            </v-toolbar-items>
        </v-toolbar>

        <main class="mt-5">
            <v-container fluid>
                @yield('content')
            </v-container>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
