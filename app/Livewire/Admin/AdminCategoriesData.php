<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoriesData extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['refreshdata' => '$refresh'];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.admin.admin-categories-data', [
            'data' => Category::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
