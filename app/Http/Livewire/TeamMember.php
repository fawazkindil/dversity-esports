<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TeamMember extends Component
{
    public function render()
    {
        return view('livewire.team-member')->layout('layouts.guest');
    }
}
