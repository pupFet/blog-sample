<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Styles -->
    <script src="{{ asset('/js/appFunc.js') }}"></script>
    <link href="{{ asset('css/account.css') }}" rel="stylesheet">
    <link href="{{ asset('css/content.css') }}" rel="stylesheet">
</head>

<body>
  <table class="header">
    <tr>
      <td width="88.5%">&nbsp;&nbsp;&nbsp; <a href="http://127.0.0.1:8000"><img src="/img/logo.png"style="height:120px"></a>
      <td>
<div class="header"align="right">
<br></br>

</div>
</td>
</tr>
</table>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                   

                    <!-- Right Side Of Navbar -->
                   
                        <!-- Authentication Links -->
                        @guest
                 
                        @else
                            
                        <p class="welcomeUsr">Welcome! <span class="uname-right">{{ Auth::user()->username }}</span></p>
                               
                        @endguest
                    
                    
                </div>
            </div>
        </nav>
            
        @yield('content')
    </div>

    <!-- Scripts -->
      
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
