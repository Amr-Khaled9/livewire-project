<?php

namespace App\Livewire\Admin;

use App\Models\Counter;
use Livewire\Component;

class AdminCountersDelete extends Component
{
    public $counter;
    protected $listeners = ['skillDelete'];
    public function skillDelete($id)
    {
        $this->counter = Counter::find($id);
        if (!$this->counter) return;

        $this->dispatch('deleteToggle');
    }

    public function delete()
    {
        $this->counter->delete();
        $this->reset('counter');
        session()->flash('success', 'Deleted Successfully');
        $this->dispatch('beforeDeleteToggle');
        $this->dispatch('refreshdata')->to(AdminCountersData::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-counters-delete');
    }
}
