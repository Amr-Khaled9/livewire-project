<?php

namespace App\Livewire\Admin;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class AdminMessagesData extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['refreshdata' => '$refresh'];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.admin.admin-messages-data', [
            'data' => Message::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
