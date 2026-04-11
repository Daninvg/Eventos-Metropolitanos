<nav class="border-b border-white/10 bg-zinc-950/80 p-4 text-white backdrop-blur-md">
    <div class="container mx-auto flex items-center justify-between gap-4">
        <a href="{{ route('home') }}" wire:navigate class="font-bold tracking-wide text-white">
            Eventos Metropolitanos
        </a>
        <div class="flex items-center gap-4 text-sm">
            <a href="{{ route('home') }}" wire:navigate class="{{ request()->routeIs('home') ? 'font-semibold text-amber-300' : 'text-white/80' }}">Inicio</a>
            <a href="{{ route('dashboard') }}" wire:navigate class="{{ request()->routeIs('dashboard') ? 'font-semibold text-amber-300' : 'text-white/80' }}">Dashboard</a>
            <a href="{{ route('user.index') }}" wire:navigate class="{{ request()->routeIs('user.*') ? 'font-semibold text-amber-300' : 'text-white/80' }}">Usuarios</a>
        </div>
    </div>
</nav>