<?php

namespace App\Livewire\Admin;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithPagination;

class AdminSubscribersData extends Component
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
        return view('livewire.admin.admin-subscribers-data', [
            'data' => Subscriber::where('email', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
