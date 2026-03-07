<nav class="bg-purple-600 p-4 text-white">
    <div class="container mx-auto flex justify-between">
        <a href="/" wire:navigate class="font-bold">Inicio</a>
        <div class="space-x-4">
            <a href="/perfil" wire:navigate class="{{ request()->is('perfil') ? 'font-bold' : '' }}">Perfil</a>
        </div>
        <a href="/logout" wire:navigate class="font-bold">Conocenos</a>
    </div>
</nav>