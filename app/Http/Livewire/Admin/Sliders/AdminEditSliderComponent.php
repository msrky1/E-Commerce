<?php

namespace App\Http\Livewire\Admin\Sliders;

use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminEditSliderComponent extends Component
{

    use WithFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $image;
    public $satatus;
    public $link;
    public $newimage;
    public $slider_id;


    public function mount($slider_link)
{

    $homeslider = HomeSlider::where('link', $slider_link)->first();
        $this->title =  $homeslider->title;
        $this->subtitle =  $homeslider->subtitle;
        $this->link =  $homeslider->link;
        $this->price =  $homeslider->price;

        $this->status =  $homeslider->status;
        $this->image =  $homeslider->image;
        $this->slider_id =  $homeslider->id;


        

        



}



public function updateSlider(){

            $homeslider = HomeSlider::find($this->slider_id);
            $homeslider->title = $this->title;
            $homeslider->subtitle = $this->subtitle;
            $homeslider->status = $this->status;
            $homeslider->price = $this->price;


            $homeslider->link = $this->link;

            $homeslider->subtitle = $this->subtitle;

            if ($this->newimage){
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('sliders', $imageName);
                $homeslider->image = $imageName; 


            }

          $homeslider->save();

          session()->flash('message' , 'Slider Başarıyla Güncellendi');



}
    public function render()
    {
        return view('livewire.admin.sliders.admin-edit-slider-component')->layout('layouts.admin');
    }
}
