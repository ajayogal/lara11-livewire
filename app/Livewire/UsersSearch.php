<?php

namespace App\Livewire;

use Livewire\Component;

class UsersSearch extends Component
{
    public $search_text = '';

    public function updatedSearchText($val)
    {
        $this->search_text = $val;
        $this->dispatch('searchUpdated', $this->search_text);
    }

    public function render()
    {
        return view('livewire.users-search');
    }
}
