<x-base-layout>
    <x-slot name="header">
        <a class="navbar-brand">{{ "Home" }}</a>
    </x-slot>
    @livewire('users-search')
    @livewire('users-list')
</x-base-layout>
