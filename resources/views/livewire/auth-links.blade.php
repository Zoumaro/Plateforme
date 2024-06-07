

<div>
    @if ($isLoggedIn)
        <div id="userLinks" class="sm:ml-auto text-white">
            <span id="userName" class="text-white text-sm mr-2">{{ $userName }}</span>
            <a href="/" wire:click="logout" class="text-white text-sm ml-1">Se déconnecter</a>
        </div>
    @else
        <div id="authLinks" class="sm:ml-auto text-white">
            <a href="/login" class="text-white text-sm mr-1">Se connecter</a> /
            <a href="/register" class="text-white text-sm ml-1">S'inscrire</a>
        </div>
    @endif
</div>
