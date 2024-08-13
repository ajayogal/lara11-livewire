<?php

namespace App\Livewire;

use App\Models\Todo;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;

#[Title("TodoLivewire - User Deatail")]
class UserDetail extends Component
{
    protected $listeners = ['updateTodos' => 'updateTodos'];
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

    public function updateTodos($todo)
    {
        // dd($todo);
        $todo = new Todo($todo);
        $this->user->incompletedTodos->push($todo);

    }

    public function delete($id)
    {
        Todo::find($id)->delete();

    }
}
