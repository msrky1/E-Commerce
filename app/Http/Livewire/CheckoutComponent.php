<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\ShippingAdress;
use App\Models\User;
use Auth;
use Cart;



class CheckoutComponent extends Component
{



    
    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $line1;
    public $line2;
    public $city;
    public $country;
    public $province;   
    public $zipcode;
    public $text_not;
    public $thankyou;
    public $note;


    public $paymentmode;

    
  
  

     public function placeOrder(){


      $order = new Order();
      $order -> user_id = Auth::user()->id;
      $order -> subtotal = session()->get('checkout') ['subtotal'];
      $order -> discount = session()->get('checkout') ['discount'];
      $order -> tax = session()->get('checkout') ['tax'];
      $order -> total = session()->get('checkout') ['total'];

      $order->firstname = $this->firstname;
      $order->lastname = $this->lastname;
      $order->email = $this->email;
      $order->mobile = $this->mobile;
      $order->line1 = $this->line1;
      $order->line2 = $this->line2;
      $order->city = $this->city;
      $order->province = $this->province;
      $order->country = $this->country;
      $order->zipcode = $this->zipcode;
      $order->note = $this->note;
      $order->status = 'ordered';
      $order->save();



      foreach(Cart::instance('cart')->content() as $item)
    
      {


          $orderItem = new OrderItem();
          $orderItem->product_id = $item->id;
          $orderItem->order_id = $order->id;
          $orderItem->price = $item->price;
          $orderItem->quantity = $item->qty;
          $orderItem->save();

  
  
      }
      session()->flash('get_messages' , 'Adres Kaydedildi');
      if($this->paymentmode == 'cod')
      {
 
       $transaction = new Transaction();
       $transaction ->user_id = Auth::user()->id;
       $transaction ->order_id = $order->id;
       $transaction ->mode = 'cod';
       $transaction ->status = 'pending';
       $transaction ->save();
 
 
      }
       
      $this->thankyou = 1;
       Cart::instance('cart')->destroy();
       session()->forget('checkout');
 
     }
 
 
     public function verifyForCheckout()
     {
 
         if(!Auth::check())
         {
          
              return redirect()->route('login');
 
 
         }
         else if ($this->thankyou){
 
             return redirect()->route('thankyou');
         }
         else if (!session()->get('checkout'))
          {
           
           $this->verifyForCheckout();
           return redirect()->route('product.cart');
 
         }


     }

    











    public function render()
    { 

      $order = Order::all();
      $user = User::all();
       
        return view('livewire.checkout-component' , ["order" => $order , 'user' => $user])->layout('layouts.base');
    }
}
