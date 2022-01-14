<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminIndexComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-index-component')->layout('layouts.admin');
    }
}
