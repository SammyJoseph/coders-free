@extends('layouts.plantilla')

@section('title', 'Editar curso')

@section('content')
<h1>Edita el curso {{$curso->name}}.</h1>
<form action="{{ route('cursos.update', $curso)}}" method="POST">
    @csrf <!-- agrega un token de seguridad al formulario -->
    @method('put') <!-- indica que el método POST es PUT -->
    <label>
        Nombre<br>
        <input type="text" name="name" value="{{old('name', $curso->name)}}">
    </label><br>
    @error('name')
        <small>*{{$message}}</small>
        <br><br>
    @enderror

    <label>
        Slug<br>
        <input type="text" name="slug" value="{{old('slug', $curso->slug)}}">
    </label><br>
    @error('slug')
        <small>*{{$message}}</small>
        <br><br>
    @enderror

    <label>
        Descripción<br>
        <textarea name="description" rows="5">{{old('description', $curso->description)}}</textarea>
    </label><br>
    @error('description')
        <small>*{{$message}}</small>
        <br><br>
    @enderror

    <label>
        Categoría<br>
        <input type="text" name="category" value="{{old('category', $curso->category)}}">
    </label><br>
    @error('category')
        <small>*{{$message}}</small>
        <br><br>
    @enderror
    <br>
    <button type="submit">Actualizar curso</button>
</form>
@endsection