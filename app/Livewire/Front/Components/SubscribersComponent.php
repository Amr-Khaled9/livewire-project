<?php

namespace App\Livewire\Front\Components;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribersComponent extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|unique:subscribers,email'
    ];

    public function save()
    {
        $this->validate();

        Subscriber::create([
            'email' => $this->email
        ]);

        session()->flash('success', 'Subscribed Successfully ');

        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.front.components.subscribers-component');
    }
}
