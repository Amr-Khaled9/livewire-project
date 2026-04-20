<?php

namespace App\Livewire\Admin;

use App\Models\Message;
use Livewire\Component;

class AdminMessagesDelete extends Component
{
    public $message;
    protected $listeners = ['skillDelete'];
    public function skillDelete($id)
    {
        $this->message = Message::find($id);
        if (!$this->message) return;

        $this->dispatch('deleteToggle');
    }

    public function delete()
    {
        $this->message->delete();
        $this->reset('message');
        session()->flash('success', 'Deleted Successfully');
        $this->dispatch('beforeDeleteToggle');
        $this->dispatch('refreshdata')->to(AdminMessagesData::class);
        $this->dispatch('show-success');
    }
    public function render()
    {
        return view('livewire.admin.admin-messages-delete');
    }
}
