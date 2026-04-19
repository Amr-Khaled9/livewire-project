<?php

namespace App\Livewire\Admin;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCountersData extends Component
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
        return view('livewire.admin.admin-counters-data', [
            'data' => Counter::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
