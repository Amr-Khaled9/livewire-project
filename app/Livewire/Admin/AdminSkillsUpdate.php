<?php

namespace App\Livewire\Admin;

use App\Models\Skill;
use Livewire\Component;

class AdminSkillsUpdate extends Component
{
    public $name, $skill, $progress;

    protected $listeners = ['skillUpdate'];

    public function skillUpdate($id)
    {
        $this->skill = Skill::findOrFail($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        $this->resetValidation();

        $this->dispatch('editToggle');
    }

    public function rules()
    {
        return [
            'skill.name' => 'required|string|min:3|max:255',
            'skill.progress' => 'required|numeric|min:0|max:100',
        ];
    }

    public function save()
    {
        $data = $this->validate();

        $this->skill->update([
            'name' => $this->skill['name'],
            'progress' => $this->skill['progress'],
        ]);
        session()->flash('success', 'Skill Updated Successfully');


        $this->dispatch('editToggle');
        $this->dispatch('refreshdata')->to(AdminSkills::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-skills-update');
    }
}
