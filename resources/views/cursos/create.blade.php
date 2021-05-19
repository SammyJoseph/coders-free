@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>En esta página podrás crear un curso.</h1>
    <form action="{{ route('cursos.store')}}" method="POST">
        @csrf <!-- agrega un token de seguridad al formulario -->
        <label>
            Nombre<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label><br>
        @error('name') <!--validación -->
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            Slug<br>
            <input type="text" name="slug" value="{{old('slug')}}">
        </label><br>
        @error('slug') <!--validación -->
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            Descripción<br>
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label><br>
        @error('description') <!--validación -->
            <small>*{{$message}}</small>
            <br><br>
        @enderror

        <label>
            Categoría<br>
            <input type="text" name="category" value="{{old('category')}}">
        </label><br>
        @error('category') <!--validación -->
            <small>*{{$message}}</small>
            <br><br>
        @enderror
        <br>
        <button type="submit">Registrar</button>
    </form>
@endsection