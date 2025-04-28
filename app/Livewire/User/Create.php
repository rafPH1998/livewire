<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Create extends Component
{
    public string $name = '';
    public array $names = [];

    public function render()
    {
        return view('livewire.user.create');
    }

    public function mount()
    {
        $this->names = Session::exists('names') ? Session::get('names') : [];
    }

    public function addNamesInArray(): void
    {
        if ($this->name !== '') {
            $this->names[] = $this->name;
            request()->session()->put('names', $this->names);
            $this->name = '';
        }
    }
}
