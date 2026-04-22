<?php

namespace App\Livewire\Admin;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProjectsData extends Component
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
        return view('livewire.admin.admin-projects-data', [
            'data' => Project::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
