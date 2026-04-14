<?php

namespace App\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSettings extends Component
{
    public  $settings;

    public function mount()
    {
        $this->settings = Setting::firstOrFail();
    }
    public function rules()
    {
        return [
            'settings.name'      => 'nullable|string|max:20',
            'settings.address'   => 'nullable|string|max:255',
            'settings.email'     => 'nullable|email|max:100',
            'settings.phone'     => 'nullable|string|max:20',

            'settings.facebook'  => 'nullable|max:255',
            'settings.twitter'   => 'nullable|max:255',
            'settings.linkedin'  => 'nullable|max:255',
            'settings.instagram' => 'nullable|max:255',
        ];
    }
    public function store()
    {
        $this->validate();

        $this->settings->update([
            'name'      => $this->settings->name,
            'address'   => $this->settings->address,
            'email'     => $this->settings->email,
            'phone'     => $this->settings->phone,
            'facebook'  => $this->settings->facebook,
            'twitter'   => $this->settings->twitter,
            'linkedin'  => $this->settings->linkedin,
            'instagram' => $this->settings->instagram,
        ]);

        $this->settings->save();

        session()->flash('success', 'Setting Updated Successfully');
         $this->dispatch('show-success');
    }

    public function render()
    {
        return view('livewire.admin.admin-settings', [
            'settings' => Setting::firstOrFail()
        ]);
    }
}
