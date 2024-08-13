<?php

use Livewire\Volt\Component;
use App\Models\Todo;

new class extends Component {
    public $title;
    public $description;
    public $user_id;

    public function mount($user_id)
    {
        session()->flash('message', '');
        $this->user_id = $user_id;
    }

    public function saveTodo()
    {
        // dd($this->user_id);
        $validated = $this->validate([
        'title' => 'required|max:50',
        'description' => 'max:200|required',
        'user_id'     => 'required|exists:users,id' // Ensure the user_id is valid
        ]);

        $todo = Todo::create($validated);

        $this->reset(['title', 'description']);

        $this->dispatch("updateTodos", $todo);

        session()->flash('message', 'Todo created successfully!');

    }
}; ?>

<div>
    <form wire:submit="saveTodo">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="createTodoLabel">New Todo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Title:</label>
                <input wire:model.live="title" type="text" class="form-control" id="recipient-name">
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Description:</label>
                <textarea wire:model.live="description" class="form-control" id="message-text"></textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
            <div wire:loading>
                <x-spinner/>
            </div>
        </div>
    </form>

</div>
