<x-base-layout>
    <x-slot name="header">
        <nav class="navbar bg-body-tertiary mb-3">
            <div class="container-fluid">
                <a class="navbar-brand">{{ "Home" }}</a>
            </div>
        </nav>
    </x-slot>
    @livewire('users-search')
    @livewire('users-list')
</x-base-layout>
