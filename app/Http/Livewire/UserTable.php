<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['userStore' => 'render'];
    public $search = '';

    public function render()
    {
        return view('livewire.user-table', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(3)
        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        session()->flash('success', 'User Berhasil Dihapus');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}