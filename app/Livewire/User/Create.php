<?php

namespace App\Livewire\User;

use Livewire\Component;

class Create extends Component
{
    public string $name = '';
    public array $names = [];

    public function render()
    {
        return view('livewire.user.create');
    }

    public function addNamesInArray(): void
    {
        if ($this->name !== '') {
            $this->names[] = $this->name;
        }
    }
}
