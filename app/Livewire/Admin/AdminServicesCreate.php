<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class AdminServicesCreate extends Component
{
    public $name, $icon , $description;

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'icon' => 'required|string|min:0|max:100',
            'description' => 'required|string|min:3|max:255'
        ];
    }

    public function save()
    {
        $data = $this->validate();

        Service::create($data);
        session()->flash('success', 'Services Saved Successfully');
        $this->reset(['name', 'icon' , 'description']);

        $this->dispatch('createToggle');
        $this->dispatch('refreshdata')->to(AdminServicesData::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-services-create');
    }
}
