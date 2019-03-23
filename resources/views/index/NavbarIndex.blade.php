<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ngerti.net</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index/NavbarIndex.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}">

    </head>
    <body>

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbarcolor">
              <a class="navbar-brand" href="#home">
                <img src="/images/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Home
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Paket
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#paketinstan">Paket Instan</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#paketbulanan">Paket Bulanan</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#paketgroup">Paket Group</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#paketintensif">Paket Intensif</a>
                    </div>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="/register">Join as Teacher/Student</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="/login">Login</span></a>
                  </li>
                </ul>
              </div>
            </nav>  

            @yield('content')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>

