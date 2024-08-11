<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBar extends Component
{
    public $search_text = "";
    public function render()
    {
        return view('livewire.search-bar');
    }
}
