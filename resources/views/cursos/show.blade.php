@extends('layouts.plantilla')

{{-- formateando texto a uppercase --}}
<?php $curso = strtoupper($curso); ?>

@section('title', 'Curso ' . $curso)

@section('content')
    <!--<p>Bienvenido al curso--> <?php #echo $curso ?><!--</p>-->
    <p>Bienvenido al curso {{$curso}}</p>
@endsection