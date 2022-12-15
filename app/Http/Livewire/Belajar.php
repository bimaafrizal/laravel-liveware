<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    public $nama = 'Bima';
    public $password = '';

    public $show_password = false;
    public function render()
    {
        return view('livewire.belajar');
    }
}