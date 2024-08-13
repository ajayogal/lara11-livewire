<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('todo.create-todo');

    $component->assertSee('');
});
