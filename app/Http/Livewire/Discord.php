<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Discord extends Component
{
    public function render()
    {
        return view('livewire.discord')->layout('layouts.guest');
    }
}
