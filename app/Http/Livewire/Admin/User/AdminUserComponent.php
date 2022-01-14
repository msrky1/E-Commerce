<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUserComponent extends Component
{

    use WithPagination;

    public function deleteUser($id){

             $users = User::find($id);
             $users->delete();
             
             session()->flash('message' , 'Kullanıcı Başarıyla Silindi');
        
    }
    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.admin.user.admin-user-component' , ['users' => $users])->layout('layouts.admin');
    }
}
