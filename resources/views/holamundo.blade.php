<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hola mundo</title>
    <link rel="stylesheet" href="{{ asset('css/Main.css') }}">
</head>

<body>

    <center>
        <h2>Este será mi pagina de Bienvenida</h2>
    </center>
    {{-- <h3> >> {{ $dato }}</h3>  --}}

    @include('sweetalert::alert')

    {{-- @include("componentes.prueba") --}}
    @yield('contenido-uno')
    @yield('contenido-dos')
    @yield('contenido')

</body>

</html>
