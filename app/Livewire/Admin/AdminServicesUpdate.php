<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class AdminServicesUpdate extends Component
{

    public $name, $description, $icon, $service;

    protected $listeners = ['skillUpdate'];

    public function skillUpdate($id)
    {
        $this->service = Service::findOrFail($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;

        $this->resetValidation();

        $this->dispatch('editToggle');
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3|max:255',
            'icon' => 'required|string|min:3|max:255',
        ];
    }

    public function save()
    {
        $data = $this->validate();

        $this->service->update([
            'name' => $data['name'],
            'icon' => $data['icon'],
            'description' => $data['description'],

        ]);
        session()->flash('success', 'Counter Updated Successfully');


        $this->dispatch('editToggle');
        $this->dispatch('refreshdata')->to(AdminServicesData::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-services-update');
    }
}
