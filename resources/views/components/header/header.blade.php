<header>
    <div>
        <p>Это хедер</p>
    </div>
    <div>
        <x-header.logo>
            {{ $slot }}
        </x-header.logo>
    </div>
    <div>
        <x-header.contacts />
    </div>
</header>
