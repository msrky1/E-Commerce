<?php

namespace App\Http\Livewire\Admin\Settings;

use Livewire\Component;

class AdminSettingsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.settings.admin-settings-component')->layout('layouts.admin');
    }
}
