@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Bienvenido a la página principal.</h1>
    <a href="{{ route('cursos.index') }}">Cursos</a>
@endsection