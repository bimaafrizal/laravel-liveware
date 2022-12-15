<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{

    public $angka = 0;
    public function render()
    {
        return view('livewire.action');
    }

    public function plus()
    {
        $this->angka += 1;
    }
    public function minus()
    {
        $this->angka -= 1;
    }
}