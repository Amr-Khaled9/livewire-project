<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AdminCategoriesUpdate extends Component
{
    public $name, $category;

    protected $listeners = ['skillUpdate'];

    public function skillUpdate($id)
    {
        $this->category = Category::findOrFail($id);
        $this->name = $this->category->name;


        $this->resetValidation();

        $this->dispatch('editToggle');
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',

        ];
    }

    public function save()
    {
        $data = $this->validate();

        $this->category->update([
            'name' => $data['name'],


        ]);
        session()->flash('success', 'Category Updated Successfully');


        $this->dispatch('editToggle');
        $this->dispatch('refreshdata')->to(AdminCategoriesData::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-categories-update');
    }
}
