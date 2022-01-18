<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;
use App\Models\Contact\Contact;

class ContactComponent extends Component
{
    public function render()
    {   
        $contact = Contact::all();
        return view('livewire.contact.contact-component' , ['contact' => $contact])->layout('layouts.base');
    }
}
