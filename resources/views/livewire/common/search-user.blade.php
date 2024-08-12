<?php

use function Livewire\Volt\{state, updated, boot};

state(['search'])->url();
boot(fn () => $this->dispatch('searchUpdated', $this->search));
updated(['search' => fn () => $this->dispatch('searchUpdated', $this->search) ]);
?>

<div>
    <div class="dropdown mb-4">
        <div id="myDropdown" class="dropdown-content">
            <input wire:model.live.debounce.500ms="search" type="search" class="form-control" placeholder="Search Users by Name or Email">
        </div>
    </div>
</div>
