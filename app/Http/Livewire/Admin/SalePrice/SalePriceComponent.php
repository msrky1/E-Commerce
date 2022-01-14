<?php

namespace App\Http\Livewire\Admin\SalePrice;

use Livewire\Component;
use App\Models\Sale;
use Livewire\WithPagination;

class SalePriceComponent extends Component
{

    use WithPagination;


    public function deleteSale($id)

    {

        $sale = Sale::find($id);
        $sale->delete();
        session()->flash('message' , 'İndirim Silindi');

    }

    public function render()
    {

      

        $saleprice = Sale::orderBy('id' , 'DESC')->paginate(10);

        return view('livewire.admin.sale-price.sale-price-component' , ['saleprice' => $saleprice])->layout('layouts.admin');
    } 
}
