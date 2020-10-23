<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.main')
            ->layout('layouts.app', ['title' => 'Main component title']);
    }
}
