@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>En esta página podrás crear un curso.</h1>
    <form action="{{ route('cursos.store')}}" method="POST">
        @csrf <!-- agrega un token de seguridad al formulario -->
        <label>
            Nombre<br>
            <input type="text" name="name">
        </label><br>
        <label>
            Descripción<br>
            <textarea name="description" rows="5"></textarea>
        </label><br>
        <label>
            Categoría<br>
            <input type="text" name="category">
        </label><br><br>
        <button type="submit">Registrar</button>
    </form>
@endsection