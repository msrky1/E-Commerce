<?php

namespace App\Http\Livewire\Admin\About;

use Livewire\Component;
use App\Models\About\About;

class AdminAboutComponent extends Component
{
    public function render()
    {
        $about = About::all();
        return view('livewire.admin.about.admin-about-component' , ['about' => $about])->layout('layouts.admin');
    }
}
