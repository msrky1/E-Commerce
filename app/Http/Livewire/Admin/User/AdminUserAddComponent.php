<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use Hash;

class AdminUserAddComponent extends Component
{

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $utype;
    public $image;

    public function addUser()
    {

        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'utype' => 'required',
            'password' => 'required',
        ]);

        $this->password = Hash::make($this->password); 

        User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password , 'utype' => $this->utype]);

        session()->flash('message', 'Kullanıcı Eklendi!');


    }
    public function render()
    {
        
        return view('livewire.admin.user.admin-user-add-component')->layout('layouts.admin');
    }
}
