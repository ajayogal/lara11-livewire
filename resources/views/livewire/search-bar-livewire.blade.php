<div>
    <div class="dropdown">
        <div id="myDropdown" class="dropdown-content">
            <input wire:model.live.debounce.500ms="search_text" type="search" class="form-control" placeholder="Livewire Search">
            @if(sizeof($todos) > 0)
            @foreach ($todos as $todo)
            <a href="#about">{{ $todo->title }}</a>
            @endforeach
            @endif
        </div>
    </div>
</div>
