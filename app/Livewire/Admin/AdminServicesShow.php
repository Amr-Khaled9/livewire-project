<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class AdminServicesShow extends Component
{
    public $name, $description, $icon, $service;

    protected $listeners = ['skillShow'];

    public function skillShow($id)
    {
        $this->service = Service::findOrFail($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;



        $this->dispatch('showToggle');
    }

    public function render()
    {
        return view('livewire.admin.admin-services-show');
    }
}
