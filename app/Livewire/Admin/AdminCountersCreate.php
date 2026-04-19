<?php

namespace App\Livewire\Admin;

use App\Models\Counter;
use Livewire\Component;

class AdminCountersCreate extends Component
{

    public $name, $count, $icon;

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'count' => 'required|numeric|min:0|max:100',
            'icon' => 'required|string|min:3|max:255',
        ];
    }

    public function save()
    {
        $data = $this->validate();

        Counter::create($data);
        session()->flash('success', 'Counter Saved Successfully');
        $this->reset(['name', 'count', 'icon']);
        $this->dispatch('createToggle');
        $this->dispatch('refreshdata')->to(AdminCounters::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-counters-create');
    }
}
