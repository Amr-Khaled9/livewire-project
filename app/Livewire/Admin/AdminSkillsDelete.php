<?php

namespace App\Livewire\Admin;

use App\Models\Skill;
use Livewire\Attributes\On;
use Livewire\Component;

class AdminSkillsDelete extends Component
{
    public $skill;
    protected $listeners = ['skillDelete'];
    public function skillDelete($id)
    {
        $this->skill = Skill::find($id);
        if (!$this->skill) return;

        $this->dispatch('deleteToggle');
    }

    public function delete()
    {
        $this->skill->delete();
        $this->reset('skill');
        session()->flash('success', 'Deleted Successfully');
        $this->dispatch('beforeDeleteToggle');
        $this->dispatch('refreshdata')->to(AdminSkills::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-skills-delete');
    }
}
