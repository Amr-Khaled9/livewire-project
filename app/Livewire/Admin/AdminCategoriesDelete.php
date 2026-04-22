<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AdminCategoriesDelete extends Component
{
    public $category;
    protected $listeners = ['skillDelete'];
    public function skillDelete($id)
    {
        $this->category = Category::find($id);
        if (!$this->category) return;

        $this->dispatch('deleteToggle');
    }

    public function delete()
    {
        $this->category->delete();
        $this->reset('category');
        session()->flash('success', 'Deleted Successfully');
        $this->dispatch('beforeDeleteToggle');
        $this->dispatch('refreshdata')->to(AdminCategoriesData::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-categories-delete');
    }
}
