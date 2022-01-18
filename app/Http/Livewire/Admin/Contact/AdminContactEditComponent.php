<?php

namespace App\Http\Livewire\Admin\Contact;

use Livewire\Component;
use App\Models\Contact\Contact;

class AdminContactEditComponent extends Component
{

    public $title;
    public $body;
    public $phone;
    public $email;
    public $adress;
    public $contact_id;

    public function mount($id){

         
        $editcontact = Contact::where('id', $id)->first();
        $this->title =  $editcontact->title;
        $this->body =  $editcontact->body;
        $this->phone =  $editcontact->phone;
        $this->email =  $editcontact->email;
        $this->adress =  $editcontact->adress;
        $this->contact_id =  $editcontact->id;
    
    
        
    
       
    
        }
        public function updateContact(){


            $editcontact = Contact::find($this->contact_id);
            $editcontact->title = $this->title;
            $editcontact->body = $this->body;
            $editcontact->phone = $this->phone;
            $editcontact->email = $this->email;
            $editcontact->adress = $this->adress;
            $editcontact->save();
    
            session()->flash('message' , 'İletişim Sayfası Güncellendi');
        }
    
    public function render()
    {
        return view('livewire.admin.contact.admin-contact-edit-component')->layout('layouts.admin');
    }
}
