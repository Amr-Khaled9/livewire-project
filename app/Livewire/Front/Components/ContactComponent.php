<?php

namespace App\Livewire\Front\Components;

use App\Models\Message;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name, $email, $subject, $message;

    protected $rules = [
        'name' => 'required|string|min:3|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|min:3|max:255',
        'message' => 'required|string|min:5',
    ];

    public function sendMessage()
    {
        $data = $this->validate();

        Message::create($data);

        session()->flash('success', 'Message sent successfully ');

        $this->reset(['name', 'email', 'subject', 'message']);
    }

    public function render()
    {
        return view('livewire.front.components.contact-component');
    }
}