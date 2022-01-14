<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use File;


class AdminProductsComponent extends Component
{
    use WithPagination;


    public function deleteProduct($id)

    {
        $product = Product::find($id);
        File::Delete('storage/products/'.$product->image);
        $product->delete();
        session()->flash('message' , 'Ürün Başarıyla Silindi');
    
    
        

    }

    public function render()
    {
        $product = Product::all();

        return view('livewire.admin.admin-products-component' , ['products'  => $product])->layout('layouts.admin');
    }
}
