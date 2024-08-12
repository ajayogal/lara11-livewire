<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserDetail extends Component
{
    public $user_id = "";
    public $user;
    public function render()
    {
        return view('livewire.user-detail', [

        ])->layout('layouts.base');
    }

    public function mount($id)
    {
        $this->user_id = $id;
        $this->user = User::with(["completedTodos", "incompletedTodos"])->findOrFail($id);
    }
}
