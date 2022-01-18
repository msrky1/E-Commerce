<?php

namespace App\Http\Livewire\Admin\Contact;

use Livewire\Component;
use App\Models\Contact\Contact;

class AdminContactComponent extends Component
{
    public function render()
    {
        $contact = Contact::all();
        return view('livewire.admin.contact.admin-contact-component' , ['contact' => $contact])->layout('layouts.admin');
    }
}
