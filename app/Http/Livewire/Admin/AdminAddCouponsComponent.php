<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminAddCouponsComponent extends Component
{

          
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;



    public function addCoupon(){

      $coupon = New Coupon();

      $coupon->code = $this->code;
      $coupon->type = $this->type;
      $coupon->value = $this->value;
      $coupon->cart_value = $this->cart_value;
      $coupon->expiry_date = $this->expiry_date;

      $coupon->save();
      session()->flash('message' , 'Kupon Başarıyla Eklendi');




    }


    public function render()
    {
        return view('livewire.admin.admin-add-coupons-component')->layout('layouts.admin');
    }
}
