<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ouvidoria - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <h1 class="text-center display-4">Ouvidoria -  Hospital Dr. Léo Orsi Bernardes</h1>
        <hr>
        <div class="container mt-1">
            <nav class="nav justify-content-center">
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">Início</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Manifestações</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#"><i class="fas fa-plus-square"></i> Nova Manifestação</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Consultar Manifestação</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"><i class="fas fa-file-alt"></i> Relatórios</a>
                    </div>
                  </li>
                <li class="nav-item"><a href="{{url('configuration')}}" class="nav-link {{ (request()->is('configurations')) ? 'active' : '' }}">Configurações</a></li>
                <li class="nav-item"><a href="{{url('help')}}" class="nav-link {{ (request()->is('help')) ? 'active' : '' }}">Ajuda</a></li>
            </nav>
            <hr>
            <div class="mt-2" style="min-height:400px">
                @yield('content')
            </div>
        </div>
        <footer class="text-center text-sm text-muted">
            Orgulhosamente apresentado por Bruno Reis Torezan @ 2020
        </footer>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    </body>
</html>