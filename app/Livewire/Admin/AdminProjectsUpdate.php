<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminProjectsUpdate extends Component
{
    use WithFileUploads;

    public $name, $link, $oldImage, $description, $category_id, $project, $newImage;

    protected $listeners = ['skillUpdate'];

    public function skillUpdate($id)
    {
        $this->project = Project::findOrFail($id);

        $this->name = $this->project->name;
        $this->link = $this->project->link;
        $this->oldImage = $this->project->image;
        $this->description = $this->project->description;
        $this->category_id = $this->project->category_id;

        $this->resetValidation();

        $this->dispatch('editToggle');
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'link' => 'nullable|string|max:255',
            'newImage' => 'nullable|image|max:2048',
            'description' => 'required|string|min:3',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function save()
    {
        $data = $this->validate();

        // 🖼️ لو فيه صورة جديدة
        if ($this->newImage) {

            // حذف القديمة
            if ($this->oldImage) {
                Storage::disk('public')->delete($this->oldImage);
            }

            // حفظ الجديدة في image (مش newImage)
            $data['image'] = $this->newImage->store('projects', 'public');
        }

        unset($data['newImage']);

        $this->project->update($data);

        session()->flash('success', 'Project Updated Successfully');

        $this->dispatch('editToggle');
        $this->dispatch('refreshdata')->to(AdminProjectsData::class);
        $this->dispatch('show-success');
    }

    public function render()
    {
        return view('livewire.admin.admin-projects-update', [
            'categories' => Category::all()
        ]);
    }
}
