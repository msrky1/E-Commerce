<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;
use Livewire\WithPagination;

class AdminCouponsComponent extends Component
{

  use WithPagination;



    public function deleteCoupon($id)
    {


      $coupon = Coupon::find($id);
      $coupon->delete();
      session()->flash('message' , 'Kupon Başarıyla Silindi');
    }
    public function render()
    {
        $coupon = Coupon::paginate(10);
        return view('livewire.admin.admin-coupons-component' , ['coupons' => $coupon])->layout('layouts.admin');
    }
}
