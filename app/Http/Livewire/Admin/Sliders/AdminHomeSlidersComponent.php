<?php

namespace App\Http\Livewire\Admin\Sliders;

use Livewire\Component;
use App\Models\HomeSlider;
use File;

class AdminHomeSlidersComponent extends Component
{
    public function deleteSlider($id)

    {
        $sliderDelete = HomeSlider::find($id);
        File::Delete('storage/sliders/'.$sliderDelete->image);
        $sliderDelete->delete();
        session()->flash('message' , 'Slider Başarıyla Silindi');
    
    
        

    }


    public function render()
    {
        
          
        $homeslider = HomeSlider::all();

        return view('livewire.admin.sliders.admin-home-sliders-component' , ['homeslider' => $homeslider])->layout('layouts.admin');
    }
}
