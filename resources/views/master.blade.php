<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- descripcion del sitio -->
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <link rel="shortcut icon" href="{{asset('img/images/wh6sorDM.png')}}"/>

    <title>Laravel</title>

    <!-- Fonts y styles -->
@include('partes.styles')
</head>
<body>
<div id="app">
    <!-- Barra lateral -->
    @yield('barra_lateral')
    <!-- Contenido Principal -->
    @yield('contenido_principal')

</div>
<!-- Scripts -->
@include('partes.scripts')
</body>
</html>
