<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<div>
    <div class="relative h-screen">
            <img src="{{ asset('imagenes/Fondo.png') }}" alt="Imagen de fondo" class="absolute inset-0 w-full h-full object-cover opacity-50">
        <div class="relative z-10 flex h-full items-center justify-start px-6">
            <div class="bg-transparent text-left backdrop-blur-sm p-10 rounded-lg shadow-lg">
                <p class="text-white text-4xl font-bold">Bienvenido a Eventos Metropolitanos</p>
                <p class="text-gray-700 text-lg mt-4">Organiza eventos fácilmente con nuestra plataforma intuitiva y sencilla.</p>
                <a
                    href="{{ route('home') }}"
                    wire:navigate
                    class="mt-6 inline-block px-6 py-3 bg-red-500 text-white rounded-t-3xl rounded-bl-3xl hover:bg-yellow-500 hover:-translate-y-0.5"
                >
                    conoce mas
                </a>
            </div>
        </div>
    </div>
</div>  