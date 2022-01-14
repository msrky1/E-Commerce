<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;
class AdminEditCouponComponent extends Component
{

    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $coupon_id;
    public $expiry_date;



    public function mount($coupon_id)
    { 
        $coupon = Coupon::find($coupon_id);
        $this->code = $coupon->code;
        $this->type = $coupon->type;

        $this->value = $coupon->value;

        $this->cart_value = $coupon->cart_value;
        $this->expiry_date = $coupon->expiry_date;



        $this->coupon_id = $coupon->id;

    }

    public function updateCoupon()
    {
      
        $coupon = Coupon::find($this->coupon_id);
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;
        $coupon->expiry_date = $this->expiry_date;


        $coupon->save();
        session()->flash('message' , 'Güncelleme Başarılı!');

        
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-coupon-component')->layout('layouts.admin');
    }
}
