<?php

namespace App\Livewire\Admin;

use App\Models\Subscriber;
use Livewire\Component;

class AdminSubscribersDelete extends Component
{
    // public function render()
    // {
    //     return view('livewire.admin.admin-subscribers-delete');
    // }


    public $skill;
    protected $listeners = ['skillDelete'];
    public function skillDelete($id)
    {
        $this->skill = Subscriber::find($id);
        if (!$this->skill) return;

        $this->dispatch('deleteToggle');
    }

    public function delete()
    {
        $this->skill->delete();
        $this->reset('skill');
        session()->flash('success', 'Deleted Successfully');
        $this->dispatch('beforeDeleteToggle');
        $this->dispatch('refreshdata')->to(AdminSubscribersData::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-subscribers-delete');
    }
}
