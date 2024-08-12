<?php

use Livewire\Volt\Component;
use App\Models\Todo;

new class extends Component {
    public $search_text = "";

    public function with() : array
    {
        return [
            'todos' => (strlen($this->search_text) >=1)? Todo::where('title', 'like', "%{$this->search_text}%")->limit(10)->get() : []
        ];
    }

}; ?>

<div>
    <div class="dropdown">
        <div id="myDropdown" class="dropdown-content">
            <input wire:model.live.debounce.500ms="search_text" type="search" class="form-control" placeholder="Volt ClassBased Search">
            @if(sizeof($todos) > 0)
            @foreach ($todos as $todo)
            <a href="#about">{{ $todo->title }}</a>
            @endforeach
            @endif
        </div>
    </div>
</div>
