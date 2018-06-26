<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Info Beasiswa IPB</title>
    
        <!-- Bootstrap core CSS -->
        <link href="{!! asset('assets/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    
        <!-- Custom fonts for this template -->
        <link href="{!! asset('assets/vendor/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
        <!-- Custom styles for this template -->
        <link href="{!! asset('assets/css/clean-blog.min.css') !!}" rel="stylesheet">
    
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      </head>
<body>
    
    <div id="app">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                    <div class="container">
                      <a class="navbar-brand" href="/">Institut Pertanian Bogor</a>
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fa fa-bars"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarResponsive">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                        <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="login">Login</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="register">Register</a>
                              </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                               

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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
                </div>
            </div>
        </nav>
    </div>
</body>
</html>
