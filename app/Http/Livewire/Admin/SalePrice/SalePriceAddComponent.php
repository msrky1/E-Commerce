<?php

namespace App\Http\Livewire\Admin\SalePrice;

use Livewire\Component;
use App\Models\Sale;
use App\Models\Product;
use App\Models\User;

class SalePriceAddComponent extends Component
{

     public $product_id;
     public $sale;
     public $start_time;
     public $stop_time;
     public $name;

    
     public function addSalePrice(){
     
      
       $sale = New Sale();
       $sale->sale = $this->sale;
       $sale->name = $this->name;
 
       $sale->start_time = $this->start_time;
       $sale->stop_time = $this->stop_time;
       $sale->save();
       session()->flash('message' , 'Ürüne İndirim Eklenmiştir');
     }

    public function render()
    {

        $product = Product::all();
        return view('livewire.admin.sale-price.sale-price-add-component' , ['product' => $product])->layout('layouts.admin');

    } 
}
