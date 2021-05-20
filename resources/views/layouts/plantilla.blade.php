<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>
    @include('layouts.partials.header'){{-- el contenido header ser movió a header.blade.php --}}
    @yield('content')
    @include('layouts.partials.footer')
</body>
</html>