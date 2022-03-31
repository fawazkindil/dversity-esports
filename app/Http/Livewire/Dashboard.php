<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user = auth()->user();
        if ($user->hasRole('Admin')) {
            return view('livewire.admin.dashboard');
        } elseif ($user->hasRole('Member')) {
            return view('livewire.member.dashboard');
        } elseif ($user->hasRole('Coach')) {
            return view('livewire.coach.dashboard');
        }
        abort(501);
    }
}
