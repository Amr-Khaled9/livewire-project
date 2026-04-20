<?php

namespace App\Livewire\Admin;

use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminMessagesShow extends Component
{
    public $email, $name, $messageObject, $status, $subject, $message;
    protected $listeners = ['skillShow'];

    public function skillShow($id)
    {
        $this->messageObject = Message::findOrFail($id);

        $this->name = $this->messageObject->name;
        $this->email = $this->messageObject->email;
        $this->subject = $this->messageObject->subject;
        $this->message = $this->messageObject->message;

        if ($this->messageObject->status == '0') {
            $this->messageObject->update([
                'status' => '1'
            ]);

            $this->messageObject->refresh();  
        }

        $this->status = $this->messageObject->status;

        $this->dispatch('refreshdata')->to(AdminMessagesData::class);
        $this->dispatch('showToggle');
    }

    public function render()
    {
        return view('livewire.admin.admin-messages-show');
    }
}
