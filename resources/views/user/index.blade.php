@extends('layouts.main-layout')

@section('title', 'index-usuario')

@section('content')

<h1 class="text-center text-3xl text-black font-bold">Bienvenido al menu de usuarios</h1>

    <button class="rounded-xl bg-amber-400 text-base text-center" >
        <a href="{{ route('user.create') }}"> Registrarse </a> 
    </button>

    @foreach ($user as $u)
        <button class="rounded-xl bg-amber-400 text-base text-center" >
            <a href="{{ route('user.edit', $u->id) }}"> Editar informacion </a> 
        </button>
    @endforeach

    <button class="rounded-xl bg-amber-400 text-base text-center" >
        <a href="{{ route('home') }}"> Regresar </a> 
    </button>

@endsection