<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Main extends Component
{
    public $name;
    public $userId;
    public $users;

    public $user;

    protected $rules = [
        'users.*.id' => '',
        'users.*.name' => '',

        'user.id' => '',
        'user.name' => '',
    ];

    public function mount()
    {
        $this->getUsers();
    }

    public function updatedUserId()
    {
        $this->user = User::find($this->userId);
    }

    public function updatedName()
    {
        $this->getUsers();
    }

    public function getUsers()
    {
        $this->users = User::query()
            ->when($this->name, function ($query, $name) {
                return $query->where('name', 'LIKE', '%' . $name . '%');
            })
            ->orderBy('name')
            ->get();
    }

    public function render()
    {
        return view('livewire.main');
    }
}
