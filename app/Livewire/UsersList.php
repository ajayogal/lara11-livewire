<?php

namespace App\Livewire;

use App\Models\Todo;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class UsersList extends Component
{
    // protected $listeners = ['searchUpdated' => 'searchUsersUpdated'];
    public $users = [];
    public $query = "";
    public function render()
    {
        return view('livewire.users-list', [
            'users' => $this->users
        ])->layout('layouts.base');
    }

    #[On('searchUpdated')]
    public function searchUsersUpdated($query)
    {
        // dd($query);
        $this->query = $query;
        $this->searchUsers();

    }

    public function searchUsers()
    {
        $this->users = User::withCount('todos')->withCount('completedTodos')->where("name", "like", "%$this->query%")->orWhere("email", "like", "%$this->query%")->get();
        foreach($this->users as $user){
            $user->todos_percentage = $user->todos_count > 0 ? round(($user->completed_todos_count / $user->todos_count) * 100, 0) : 0;
        }
    }
}
