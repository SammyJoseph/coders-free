@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la página Cursos.</h1>
    {{-- route('cursos.create') llama al nombre de la ruta --}}
    <a href="{{ route('cursos.create') }}">Crear un curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                
                <a href="{{ route('cursos.show', $curso) }}">{{ $curso->name }}</a><br> <!-- Laravel ya sabe que debe tomar el id (lo mismo de arriba) -->
                {{-- {{ route('cursos.show', $curso) }} //imprime el slug--}} 
            </li>
        @endforeach
    </ul>

    {{ $cursos->links() }} {{--navegación entre páginas (15 resultados por pág.--}}
@endsection