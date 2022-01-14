<?php

namespace App\Http\Livewire\Admin\Sliders;

use Livewire\Component;
use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{

    use WithFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $image;
    public $satatus;
    public $link;



     public function mount()

     {

        $this->status = "açık";

     }


      public function addSlider(){


       $homeslider = new HomeSlider();
       $homeslider->title = $this->title;
       $homeslider->subtitle = $this->subtitle;

       $homeslider->price = $this->price;

       $homeslider->status = $this->status;
       $homeslider->link = $this->link;

       $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
       $this->image->storeAs('sliders', $imageName);
       $homeslider->image = $imageName; 

       $homeslider->save();

       session()->flash('message' , 'slider Başarıyla Eklendi!');




      }


    public function render()
    {
        return view('livewire.admin.sliders.admin-add-home-slider-component')->layout('layouts.admin');
    }
}
