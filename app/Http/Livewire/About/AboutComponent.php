<?php

namespace App\Http\Livewire\About;

use Livewire\Component;
use App\Models\About\About;

class AboutComponent extends Component
{
    public function render()
    {
        $about = About::all();
        return view('livewire.about.about-component' , ['about' => $about])->layout('layouts.base');
    }
}
