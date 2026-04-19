<?php

namespace App\Livewire\Admin;

use App\Models\Counter;
use Livewire\Component;

class AdminCountersUpdate extends Component
{
    public $name, $count, $icon, $counter;

    protected $listeners = ['skillUpdate'];

    public function skillUpdate($id)
    {
        $this->counter = Counter::findOrFail($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon = $this->counter->icon;

        $this->resetValidation();

        $this->dispatch('editToggle');
    }

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

        $this->counter->update([
            'name' => $data['name'],
            'count' => $data['count'],
            'icon' => $data['icon'],

        ]);
        session()->flash('success', 'Counter Updated Successfully');


        $this->dispatch('editToggle');
        $this->dispatch('refreshdata')->to(AdminCountersData::class);
        $this->dispatch('show-success');
    }

    public function render()
    {
        return view('livewire.admin.admin-counters-update');
    }
}
