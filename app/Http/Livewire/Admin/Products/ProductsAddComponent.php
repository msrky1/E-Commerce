<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Sale;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class ProductsAddComponent extends Component
{
       use WithFileUploads;
       public $name;
       public $slug; 
       public $short_description;
       public $description;
       public $regular_price;
       public $sale_price;
       public $SKU;
       public $stock_status;
       public $featured;
       public $quantity;
       public $image;
       public $category_id;
       public $sale;



       public function mount(){
        
        $this->stock_status =  'instock';
        $this->featured = "0";
     


       }


       public function generateSlug(){

             $this->slug  = Str::slug($this->name ,'-');

       }


       public function addProduct()
          {
              $product = new Product();
              $product->name = $this->name;
              $product->slug = $this->slug;

              $product->short_description = $this->short_description;
              $product->description = $this->description;
              $product->regular_price = $this->regular_price;
              $product->sale_price = $this->sale_price;
              $product->SKU = $this->SKU;

              $product->featured = $this->featured;
              $product->stock_status = $this->stock_status;

              $product->quantity = $this->quantity;
              $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
              $this->image->storeAs('products', $imageName);
              $product->image = $imageName; 
              $product->category_id = $this->category_id;
              $product->sale = $this->sale;


              $product->save();

              session()->flash('message' ,'Ürün Başarıyla Eklendi ');
 


             }

             




    public function render()
    {

              
         $category = Category::all();
         $sales = Sale::all();

        return view('livewire.admin.products.products-add-component',['categories' => $category , 'sales' => $sales])->layout('layouts.admin');
    } 
}
