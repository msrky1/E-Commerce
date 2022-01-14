<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\Product;
use Cart;

class HomeComponent extends Component
{

    public function store($product_id, $product_name, $product_price){


        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message' , 'item added in Cart');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $homeslider = HomeSlider::where('status' , "Açık")->get();
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(8);
        return view('livewire.home-component' , ['homeslider' => $homeslider , 'lproducts' => $lproducts])->layout('layouts.base');
    }  
}
