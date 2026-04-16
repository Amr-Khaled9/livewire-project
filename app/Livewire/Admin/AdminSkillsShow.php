<?php

namespace App\Livewire\Admin;

use App\Models\Skill;
use Livewire\Component;

class AdminSkillsShow extends Component
{
    public $skill, $name, $progress;
    protected $listeners = ['skillShow'];

    public function skillShow($id)
    {
        $this->skill = Skill::findOrFail($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;


        $this->dispatch('showToggle');
    }


    public function render()
    {
        return view('livewire.admin.admin-skills-show');
    }
}
