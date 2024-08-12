<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersList extends Component
{
    protected $listeners = ['searchUpdated' => 'searchUsersUpdated'];
    public $users = [];
    public $query = "";
    public function render()
    {
        $this->searchUsers();

        return view('livewire.users-list', [
            'users' => $this->users
        ]);
    }

    public function searchUsersUpdated($query)
    {
        // dd($query);
        $this->query = $query;
        $this->searchUsers();

    }

    public function searchUsers()
    {
        $this->users = User::withCount('todos')->where("name", "like", "%$this->query%")->orWhere("email", "like", "%$this->query%")->get();
    }
}
