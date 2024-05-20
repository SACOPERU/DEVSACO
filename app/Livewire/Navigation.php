<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navigation extends Component
{
    public $userInitial;

    public function mount()
    {
        if (Auth::check()) {
            $this->userInitial = strtoupper(substr(Auth::user()->name, 0, 1));
        } else {
            $this->userInitial = 'S';
        }
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}
