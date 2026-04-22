<?php

namespace App\Livewire\Admin;

use App\Models\Project;
use Livewire\Component;

class AdminProjectsDelete extends Component
{
    public $project;
    protected $listeners = ['skillDelete'];
    public function skillDelete($id)
    {
        $this->project = Project::find($id);
        if (!$this->project) return;

        $this->dispatch('deleteToggle');
    }

    public function delete()
    {
        $this->project->delete();
        $this->reset('project');
        session()->flash('success', 'Deleted Successfully');
        $this->dispatch('beforeDeleteToggle');
        $this->dispatch('refreshdata')->to(AdminProjectsData::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-projects-delete');
    }
}
