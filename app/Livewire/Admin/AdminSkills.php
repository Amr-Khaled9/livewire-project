<?php

namespace App\Livewire\Admin;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class AdminSkills extends Component
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
        return view('livewire.admin.admin-skills', [
            'data' => Skill::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
