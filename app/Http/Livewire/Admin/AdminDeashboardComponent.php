<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminDeashboardComponent extends Component
{
    public function render()
    {   
        $users = User::all();
        return view('livewire.admin.admin-deashboard-component' , ['users' => $users])->laoyut('layouts.admin');
    }
}
