@extends('layouts.main-layout')

@section('title', 'Editar usuario')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-orange-50 p-6">
    <div class="bg-white p-8 rounded-3xl shadow-xl w-full max-w-md border border-purple-100">
        <div class="flex justify-center mb-6">
            <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center">
                <img src="{{ asset('images/animatedKey.png')}}" alt="usuario.jpg">
            </div>
        </div>

        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-8">Editar perfil de usuario</h2>

        <form action="{{ route('user.update', $user->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PATCH')
            <div class="border-black">
                <label for="name" class="block text-sm font-medium text-gray-600 mb-1 ml-1">Nuevo nombre</label>
                <input type="text" 
                       name="name" 
                       id="name" 
                       value="{{ old('name') }}" 
                       required 
                       class="w-full px-4 py-3 rounded-xl bg-blue-50 border-black 
                       focus:border-purple-300 focus:bg-white focus:ring-0 
                       transition duration-300 text-gray-700">
                @error('name')
                    <p class="text-red-400 text-xs mt-1 ml-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="email" class="block text-sm font-medium text-gray-600 mb-1 ml-1">Nuevo correo</label>
                <input type="email" 
                       name="email" 
                       id="email" 
                       value="{{ old('email') }}" 
                       required 
                       class="w-full px-4 py-3 rounded-xl bg-purple-50 border-black focus:border-purple-300
                        focus:bg-white focus:ring-0 transition duration-300 text-gray-700">
                @error('email')
                    <p class="text-red-400 text-xs mt-1 ml-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="border-black">
                <label for="password" class="block text-sm font-medium text-gray-600 mb-1 ml-1">Nueva contraseña</label>
                <input type="password" 
                       name="password" 
                       id="password" 
                       required 
                       class="w-full px-4 py-3 rounded-xl bg-green-50 border-black
                        focus:border-purple-300 focus:bg-white focus:ring-0 transition duration-300
                         text-gray-700">
                @error('password')
                    <p class="text-red-400 text-xs mt-1 ml-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" 
                    class="w-full py-3 mt-4 bg-[#2C543C] hover:bg-[#2C543C] text-white font-bold rounded-xl shadow-lg shadow-blue-200 transition duration-300 transform hover:-translate-y-1">
                Guardar
            </button>
        </form>

        <p class="text-center text-xs text-gray-400 mt-6">
            Los campos marcados son obligatorios.
        </p>
    </div>
</div>    
@endsection