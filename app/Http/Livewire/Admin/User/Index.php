<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $users;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.admin.user.index');
    }

    public function delete($user_id)
    {
        User::find($user_id)->delete();
    }
}
