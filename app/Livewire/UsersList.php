<?php

namespace App\Livewire;

use App\Models\Todo;
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
        $total_todos = Todo::count('id');
        $this->users = User::withCount('todos')->where("name", "like", "%$this->query%")->orWhere("email", "like", "%$this->query%")->get();
        foreach($this->users as $user){
            $user->todos_percentage = $total_todos > 0 ? round(($user->todos_count / $total_todos) * 100, 0) : 0;
        }
    }
}
