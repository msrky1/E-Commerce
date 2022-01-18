<?php

namespace App\Http\Livewire\Admin\About;

use Livewire\Component;
use App\Models\About\About;

class AdminAboutEditComponent extends Component
{
    public $title;
    public $body;
    public $line1;
    public $line2;
    
    public $about_id;

    public function mount($id){

         
    $editabout = About::where('id', $id)->first();
    $this->title =  $editabout->title;
    $this->body =  $editabout->body;
    $this->line1 =  $editabout->line1;
    $this->line2 =  $editabout->line2;
    $this->about_id =  $editabout->id;


    

   

    }
    public function updateAbout(){


        $editabout = About::find($this->about_id);
        $editabout->title = $this->title;
        $editabout->body = $this->body;
        $editabout->line1 = $this->line1;
        $editabout->line2 = $this->line2;
        $editabout->save();


      session()->flash('message' , 'Hakkımızda Sayfası Güncellendi');
    }
    public function render()
    {
        return view('livewire.admin.about.admin-about-edit-component')->layout('layouts.admin');
    }
}
