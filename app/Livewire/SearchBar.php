<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class SearchBar extends Component
{
    public $search_text = "";
    public function render()
    {
        $results = [];

        if(strlen($this->search_text) >=1){
            $results = Todo::where('title', 'like', "%{$this->search_text}%")->limit(10)->get();
        }
        return view('livewire.search-bar', [
            'todos' => $results
        ]);
    }
}
