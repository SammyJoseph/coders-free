@extends('layouts.plantilla')

{{-- formateando texto a uppercase --}}
<?php // $curso = strtoupper($curso); ?> 

@section('title', 'Curso ' . $curso->name)

@section('content')
    <!--<p>Bienvenido al curso--> <?php #echo $curso ?><!--</p>-->
    <h1>Bienvenido al curso #{{$curso->id}}: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a Cursos</a><br>
    <a href="{{route('cursos.edit', $curso)}}">Editar este curso</a>
    <p><strong>Categoría: </strong>{{$curso->category}}</p>
    <p><strong>Descripción: </strong>{{$curso->description}}</p>
@endsection