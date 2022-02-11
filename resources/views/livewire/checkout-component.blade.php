<main>
    <div class="page-head">
        <div class="container">
            <div class="d-flex flex-column flex-md-row">
                <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html">Anasayfa</a>
                    </li>
                    <li class="breadcrumb-item active">Ödeme</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <section class="section" id="page-checkout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                       
                        
                    </div>
                    
                </div>  
                

              
          
                <form class="row checkout-form inputs-border inputs-bg" wire:submit.prevent="placeOrder">
                    <div class="col-md-6">
                        <div class="billing-field">
                            <h3 class="title">Kargo Adresi</h3>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <div class="required">
                                        <input type="text" name="firstname" class="form-control" placeholder="Adınız"
                                            required="" wire:model="firstname"/>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="required">
                                        <input type="text" name="lastname" class="form-control" placeholder="Soyadınız" required="" wire:model="lastname" />
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <div class="required">
                                        <input type="email" name="email" class="form-control" placeholder="Email Adres"
                                            required=""wire:model="email"/>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="required">
                                        <input type="tel" name="mobile" class="form-control" placeholder="Telefon Numarası" required="" wire:model="mobile" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="required">
                                    <select class="form-control" name="city" wire:model="city">
                                        <option>Nerede Yaşıyorsunuz?</option>
                                        <option value="SY">Kahrmanmaraş</option>
                                        <option value="UK">Bursa</option>
                                        <option value="US">Gaziantep</option>
                                        <option value="TR">İstanbul</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <div class="required">
                                        <input type="text"  name="line1" class="form-control" placeholder="Adres 1" required="" wire:model="line1" />
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" name="line2" class="form-control" placeholder="Addres 2" wire:model="line2" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="required">
                                    <input type="text" name="zipcode" class="form-control" placeholder="Posta Kodu"
                                        required="" wire:model="zipcode" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <div class="required">
                                        <input type="text" name="province" class="form-control" placeholder="İlçe"
                                            required="" wire:model="province" />
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <div class="required">
                                        <select class="form-control" name="country" wire:model="country">
                                            <option>Ülke</option>
                                            <option value="SY">Türkiye</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            
                           
                         
                            <div class="form-group">
                                <label>Not Eklemek İster Misiniz?</label>
                                <textarea class="form-control"
                                    placeholder="Lütfen notunuzu yazınız"
                                    rows="5" wire:model="note"></textarea>
                            </div>
                           
                        </div>
                        <div class="text-left">
                            @if (Session::has('get_messages'))
    
                            <strong style="color:green"> {{Session::get('get_messages')}}</strong>
                                
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="review-order">
                            <div class="box">
                                <h3 class="title">Siparişiniz</h3>  
                                <div class="table-responsive">
                                    <table class="table cart-table review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name" colspan="2">Ürünler</th>
                                                <th class="product-total">Toplam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Cart::instance('cart')->content()  as $item)

                                            <tr class="item">
                                                <td class="product-name" colspan="2">
                                                    {{$item->model->name}}

                                                    <strong class="product-quantity">× {{$item->model->item}}
                                                    </strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">$90.00</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr class="item">
                                                <td class="product-name" colspan="2">
                                                    Patterned Scarf
                                                    <strong class="product-quantity">× 1</strong>
                                                    <table class="variation">
                                                        <tbody>
                                                            <tr>
                                                                <th class="variation-size">Size:</th>
                                                                <td class="variation-size">
                                                                    <p>Large</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">$450.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th colspan="2">Ara Toplam</th>
                                                <td><span class="amount">$540.00</span></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th colspan="2">Kargo</th>
                                                <td>
                                                    <p>Ücretsiz Kargo</p>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th colspan="2">KDV</th>
                                                <td>
                                                    <strong><span class="amount">%18</span></strong>
                                                </td>
                                            </tr>
                                            @if (Session::has('checkout'))
                                                
                                       
                                            <tr class="order-total">
                                                <th colspan="2"> Genel Topkam</th>
                                                <td>
                                                    <strong><span class="amount">{{Session::get('checkout')['total']}}</span></strong>
                                                </td>
                                            </tr>
                                            @endif
                                        </tfoot>
                                    </table>
                                </div>
                         

                                <h2>Ödeme Yöntemleri</h2>
                                <div id="payment" class="checkout-payment">
                                    <ul class="payment-methods">
                                        <li class="payment-method">
                                            <input id="payment_method_cheque" type="radio" name="payment_method"
                                                checked="checked" />
                                            <label for="payment_method_cheque" class="radio"
                                                data-slide-toggle="#payment-cheque"
                                                data-parent=".payment-methods" wire:model="paymentmode">Cheque Payment</label>
                                            <div class="payment-box" id="payment-cheque">
                                                <p>
                                                    Please send your cheque to Store Name, Store Street,
                                                    Store Town, Store State / County, Store Postcode.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="payment-method">
                                            <input id="payment_method_cod" type="radio" name="payment_method"  />
                                            <label for="payment_method_cod" class="radio"
                                                data-slide-toggle="#payment-cash" data-parent=".payment-methods">Cash on
                                                Delivery</label>
                                            <div class="payment-box" id="payment-cash" style="display: none">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </li>
                                        <li class="payment-method">
                                            <input id="payment_method_paypal" type="radio" name="payment_method" />
                                            <label for="payment_method_paypal" class="radio"
                                                data-slide-toggle="#payment-paypal"
                                                data-parent=".payment-methods">PayPal</label>
                                            <div class="payment-box" id="payment-paypal" style="display: none">
                                                <img src="webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"
                                                    class="img-fluid" alt="" />
                                                <p><a href="#!" class="effect">What is PayPal?</a></p>
                                                <p>
                                                    Pay via PayPal; you can pay with your credit card if
                                                    you don’t have a PayPal account.
                                                </p>
                                            </div>
                                            @error('paymentmode')
                                                <span class="text-danger">  {{$message}} </span>
                                            @enderror
                                        </li>
                                    </ul>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">
                                          Ödeme Gerçekleştir
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </div>
</main>
