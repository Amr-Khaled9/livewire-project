<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminProjectsCreate extends Component
{
    use WithFileUploads;
    public $name, $link, $image, $description, $category_id;

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'link' => 'nullable|string|max:255',
            'image' => 'required|image|max:2048',
            'description' => 'required|string|min:3',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function save()
    {
        $data = $this->validate();

        $data['image'] = $this->image->store('projects', 'public');

        Project::create($data);

        session()->flash('success', 'Project Created Successfully');

        $this->reset(['name', 'link', 'image', 'description', 'category_id']);

        $this->dispatch('createToggle');
        $this->dispatch('refreshdata')->to(AdminProjectsData::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view(
            'livewire.admin.admin-projects-create',
            ['categories' => Category::all()]
        );
    }
}
