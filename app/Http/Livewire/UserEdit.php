<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    // public $user;
    public $name;
    public $user_id;
    public $email;
    public function mount($user)
    {
        $this->name = $user->name;
        $this->user_id = $user->id;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.user-edit');
    }

    public function edit()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
        ]);

        User::where('id', $this->user_id)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        redirect('livewire-crud')->with('success', 'User berhasil diedit');
    }
}