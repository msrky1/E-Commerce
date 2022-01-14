<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;
class WishlistComponent extends Component
{

    public function store($product_id, $product_name, $product_price){


        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message' , 'item added in Cart');
        $this->emitTo('cart-count-component' , 'refreshComponent');

      //  return redirect('/cart')->back();
      
    }

    
    public function removeFromWishlist($product_id)
    {


       foreach(Cart::instance('wishlist')->content() as $witem){


           if ($witem->id == $product_id){

               Cart::instance('wishlist')->remove($witem->rowId);
         
               $this->emitTo('wishlist-count-component' , 'refreshComponent');
               return;
           }
          

       }
    }
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.wishlist-component' )->layout('layouts.base');
    }
}
