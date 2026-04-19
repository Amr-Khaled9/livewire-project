<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class AdminServicesDelete extends Component
{
    public $service;
    protected $listeners = ['skillDelete'];
    public function skillDelete($id)
    {
        $this->service = Service::find($id);
        if (!$this->service) return;

        $this->dispatch('deleteToggle');
    }

    public function delete()
    {
        $this->service->delete();
        $this->reset('service');
        session()->flash('success', 'Deleted Successfully');
        $this->dispatch('beforeDeleteToggle');
        $this->dispatch('refreshdata')->to(AdminServicesData::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-services-delete');
    }
}
