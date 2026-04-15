<?php

namespace App\Livewire\Admin;

use App\Models\Skill;
use Livewire\Component;

class AdminSkillsCreate extends Component
{
    public $skill;
    public function mount()
    {
        $this->skill = new Skill();
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
        $this->validate();

        $this->skill->save();
        session()->flash('success', 'Skill Saved Successfully');

        $this->reset(['skill.name', 'skill.progress']);

        $this->dispatch('createToggle');
        $this->dispatch('refreshdata')->to(AdminSkills::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-skills-create');
    }
}
