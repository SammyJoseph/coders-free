@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la página Cursos.</h1>
    {{-- route('cursos.create') llama al nombre de la ruta --}}
    <a href="{{ route('cursos.create') }}">Crear un curso</a>
    <ul>
        @foreach ($cursos as $c)
            <li>
                <a href="{{ route('cursos.show', $c->id) }}">{{ $c->name }}</a>
            </li>
        @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection