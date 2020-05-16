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
        <div class="bg-primary text-center p-2 text-white mb-2">Ouvidoria - Hospital Dr. Léo Orsi Bernardes</div>
        <div class="container mt-1">
            <nav class="nav justify-content-center">
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">Início</a></li>
                <li class="nav-item"><a href="{{url('manifestation')}}" class="nav-link {{ (request()->is('manifestation')) ? 'active' : '' }}">Manifestações</a></li>
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
    <script>
        $('#editSetores').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var idsetor = button.data('idsetor');
            var name = button.data('name');
            var responsible = button.data('responsible');
            var responsible_m = button.data('responsible_m');
            var manager = button.data('manager');
            var manager_m = button.data('manager_m');
            var modal = $(this)
           
            modal.find(".modal-body #idsetor").val(idsetor);
            modal.find(".modal-body #name").val(name);
            modal.find(".modal-body #responsible").val(responsible);
            modal.find(".modal-body #responsible_m").val(responsible_m);
            modal.find(".modal-body #manager").val(manager);
            modal.find(".modal-body #manager_m").val(manager_m);
            modal.find(".modal-body #modal").val(modal);
        });

        $('#deleteSetores').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var idsetor = button.data('idsetor');
            var modal = $(this)
           
            modal.find(".modal-body #idsetor").val(idsetor);

        });

        $('#editOrigins').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var idorigin = button.data('idorigin');
            var name = button.data('name');
            var description = button.data('description');
            var modal = $(this)
           
            modal.find(".modal-body #idorigin").val(idorigin);
            modal.find(".modal-body #name").val(name);
            modal.find(".modal-body #description").val(description);

            modal.find(".modal-body #modal").val(modal);
        });

        $('#deleteOrigins').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var idorigin = button.data('idorigin');
            console.log(idorigin);
            var modal = $(this)
           
            modal.find(".modal-body #idorigin").val(idorigin);
            modal.find(".modal-body #modal").val(modal);

        });
        
        $('#deleteFollowUps').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var idfollowup = button.data('idfollowup');
            var modal = $(this)
           
            modal.find(".modal-body #idfollowup").val(idfollowup);
            modal.find(".modal-body #modal").val(modal);

        });

    </script>
    </body>
</html>