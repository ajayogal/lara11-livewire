<x-base-layout>
    <x-slot name="header">
        <nav class="navbar bg-body-tertiary mb-3">
            <div class="container-fluid">
                <a class="navbar-brand">{{ "Home" }}</a>
            </div>
        </nav>
    </x-slot>
    <div class="row">
        <div class="col-4">
            @livewire('search-bar')
        </div>
        <div class="col-4">
            @livewire('search-bar-volt-classbased')
        </div>
        <div class="col-4">
            @livewire('search-bar-volt')
        </div>
    </div>

</x-base-layout>
