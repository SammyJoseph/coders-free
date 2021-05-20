@extends('layouts.plantilla')

@section('title', 'Contacto')

@section('content')
    <h1>Déjanos un mensaje.</h1>
    <form action="{{route('contacto.store')}}" method="POST">
        @csrf
        <label>
            Nombre: <br>
            <input type="text" name="name">
        </label> <br>
        @error('name')
            <small>{{$message}}</small><br><br>
        @enderror

        <label>
            Email: <br>
            <input type="text" name="email">
        </label> <br>
        @error('email')
            <small>{{$message}}</small><br><br>
        @enderror

        <label>
            Mensaje: <br>
            <textarea name="message" rows="4"></textarea>
        </label> <br>
        @error('message')
            <small>{{$message}}</small><br><br>
        @enderror

        <button type="submit">Enviar mensaje</button>
    </form><br>

    @if (session('info')) {{--si existe la variable info desde ContactController--}}
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection