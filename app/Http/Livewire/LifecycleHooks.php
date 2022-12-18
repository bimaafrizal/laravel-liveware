<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LifecycleHooks extends Component
{

    public $hobi = 'bermain game';
    public $warna_kesukaan = 'biru';
    public $proses = [];
    //lifecycle adalah alur kerja livewire

    //livecycle yang pertama mengolah data kemudian akan di render
    public function mount()
    {
        $this->hobi = 'main bola';
        $this->warna_kesukaan = 'kuning';
        $this->proses[] = 'sedang di mount';
    }

    //mount hanya dipanggil pertama saja, untuk selanjutnya diolah oleh hydrate updating dan updated
    public function hydrate()
    {
        $this->proses[] = 'sedang di hydraye';
    }

    public function updating($name, $value)
    {
        $this->proses[] = "sedang di updating => $name & $value";
    }

    public function updated($name, $value)
    {
        $this->proses[] = "sedang di updated => $name & $value";
    }
    public function updatingHobi($name, $value)
    {
        $this->proses[] = "sedang di updatingHobi => $name & $value";
    }

    public function updatedHobi($name, $value)
    {
        $this->proses[] = "sedang di updated updatedHobi => $name & $value";
    }
    public function updatingWarnaKesukaan($name, $value)
    {
        $this->proses[] = "sedang di updatingWarnaKesukaan => $name & $value";
    }

    public function updatedWarnaKesukaan($name, $value)
    {
        $this->proses[] = "sedang di updatedWarnaKesukaan => $name & $value";
    }

    public function render()
    {
        $this->proses[] = 'sedang di render';
        $this->proses[] = '----';

        return view('livewire.lifecycle-hooks');
    }
}