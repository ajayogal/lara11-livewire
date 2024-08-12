<?php
use App\Models\Todo;
use function Livewire\Volt\{state, computed};

state(['search_text']);

$todos = computed(function () {
    if(strlen($this->search_text) >=1){
        return Todo::where('title', 'like', "%{$this->search_text}%")->limit(10)->get();
    }else{
        return array();
    }
});
?>

<div>
    <div class="dropdown">
        <div id="myDropdown" class="dropdown-content">
            <input wire:model.live.debounce.500ms="search_text" type="search" class="form-control" placeholder="Volt Search">

            @foreach ($this->todos as $todo)
            <a href="#about">{{ $todo->title }}</a>
            @endforeach

        </div>
    </div>
</div>
