@extends('errors::illustrated-layout')

@section('code', '404')
@section('title', __('Página no encontrada'))

@section('image')
<style>
    #apartado-derecho{
        text-align:center;
    }
    ul{
        text-decoration: none !important;
        list-style: none;
        color: black;
        font-weight: bold;
    }
</style>
<div id="apartado-derecho" style="background-color: #F5716C;" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    <h2>Encuentra lo que buscas en nuestro menú:</h2>
    <ul>
        <li><a href="{{route("inicio")}}">Inicio</a></li>
        <li><a href="{{route("login")}}">Login</a></li>
        <li><a href="{{route("register")}}">Registro</a></li>

    </ul>
</div>
@endsection

@section('message', __('No hemos encontrado la página que buscas.'))