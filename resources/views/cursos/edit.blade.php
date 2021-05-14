@extends('layouts.plantilla')

@section('title', 'Editar curso')

@section('content')
<h1>Edita el curso {{$curso->name}}.</h1>
<form action="{{ route('cursos.update', $curso)}}" method="POST">
    @csrf <!-- agrega un token de seguridad al formulario -->
    @method('put') <!-- indica que el método POST es PUT -->
    <label>
        Nombre<br>
        <input type="text" name="name" value="{{$curso->name}}">
    </label><br>
    <label>
        Descripción<br>
        <textarea name="description" rows="5">{{$curso->description}}</textarea>
    </label><br>
    <label>
        Categoría<br>
        <input type="text" name="category" value="{{$curso->category}}">
    </label><br><br>
    <button type="submit">Actualizar curso</button>
</form>
@endsection