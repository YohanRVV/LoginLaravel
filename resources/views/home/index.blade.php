@extends('layouts.app-master')
@section('content')
    <h1>Home</h1>
    @auth
        <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, Estás autenticado en la página</p>
        <p>
            <a href="/logout">Logout</a>
        </p>
    @endauth
    @guest
        <p>Para ver contenido <a href="/login">Inicia Sesión</a></p>
    @endguest
@endsection