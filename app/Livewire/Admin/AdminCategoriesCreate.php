<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AdminCategoriesCreate extends Component
{
    public $name;

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
        ];
    }

    public function save()
    {
        $data = $this->validate();

        Category::create($data);
        session()->flash('success', 'Category Saved Successfully');
        $this->reset(['name']);
        $this->dispatch('createToggle');
        $this->dispatch('refreshdata')->to(AdminCategoriesData::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-categories-create');
    }
}
