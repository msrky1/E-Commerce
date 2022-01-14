<main>

    <div class="page-head">
        <div class="container">
            <div class="d-flex flex-column flex-md-row">
                <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html">Anasayfa </a>
                    </li>
                    <li class="breadcrumb-item active">Sepetim</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <section class="section" id="page-cart">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table cart-table" cellspacing="0">
                                @if (Session::has('success_message'))
                                    <strong>Success </strong>{{ Session::get('success_message') }}
                                @endif
                                @if (Cart::instance('cart')->count() > 0)
                                    <thead>
                                        <tr>
                                            <th class="product-remove"></th>
                                            <th class="product-thumbnail"></th>
                                            <th class="product-name">Ürün</th>
                                            <th class="product-price">Fiyatı</th>
                                            <th class="product-quantity">Miktarı</th>
                                            <th class="product-subtotal">Toplam</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach (Cart::instance('cart')->content() as $item)
                                            <tr class="item">
                                                <td class="product-remove">
                                                    <a href="#!" class="remove" title="Remove this item"
                                                        wire:click.prevent="destroy('{{ $item->rowId }}')"><i
                                                            class="bx bx-x"></i></a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="{{ route('product.details', $item->model->slug) }}">
                                                        <img src="{{ asset('storage') }}/products/{{ $item->model->image }}"
                                                            class="img-fluid" alt="{{ $item->model->image }}">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="product.html">{{ $item->model->name }}</a>
                                                </td>
                                                <td class="product-price">
                                                    <span
                                                        class="amount">₺{{ $item->model->regular_price }}</span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="quantity">
                                                        <input type="button" value="+" class="plus"
                                                            wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">
                                                        <input type="number" step="1" max="5" min="1"
                                                            value="{{ $item->qty }}" title="Qty"
                                                            class="qty" size="4">
                                                        <input type="button" value="-" class="minus"
                                                            wire:click.prevent="decreaseQuentity('{{ $item->rowId }}')">
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="amount">{{ $item->subtotal }}₺</span>
                                                </td>
                                            </tr>
                                        @endforeach


                                    @else


                                        <p>
                                        <h2>Sepetiniz Boş </h2>
                                        </p>
                                @endif

                                @if (Cart::instance('cart')->count() > 0)
                                    
                             
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="row">
                                            <div class="coupon col-lg-5">
                                                <div class="row">

                                                    @if (!Session::has('coupon'))




                                                        <div class="md-sm-6">




                                                        </div>

                                                        <form wire:submit.prevent="applyCouponCode">


                                                            <div class="coupon col-lg-5">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="couponCode"
                                                                            class="form-control"
                                                                            placeholder="Kupon Kodu"
                                                                            wire:model="couponCode" />
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <input type="submit" class="btn btn-primary"
                                                                            value="Kuponu Onayla" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @if (Session::has('get_message'))

                                                                <div class="col-sm-6">
                                                                    <h6 style="color: red">
                                                                        {{ Session()->get('get_message') }} <h3>
                                                                </div>




                                                            @endif
                                                        </form>
                                                    @endif



                                                </div>
                                            </div>
                                            <div class="cart-collaterals col-lg-5 offset-lg-2">
                                                <div class="cart-totals">
                                                    <h2>Sipariş Toplamı</h2>
                                                    <table class="table table-condensed" cellspacing="0">
                                                        <tbody>
                                                            <tr class="cart-subtotal">
                                                                <th>Ara Toplam</th>
                                                                <td class="text-right">
                                                                    <span
                                                                        class="amount">{{ Cart::instance('cart')->subtotal() }}₺</span>
                                                                </td>
                                                            </tr>



                                                            @if (Session::has('coupon'))

                                                                <tr class="shipping">
                                                                    <th>İndirim</th>
                                                                    <td class="text-right">
                                                                        <span class="amount">
                                                                            ({{ Session::get('coupon')['code'] }})
                                                                            {{ number_format($discount, 2) }}₺</span>

                                                                    </td>

                                                                    <td class="product-remove">
                                                                        <a href="#!" class="remove"
                                                                            title="İndirimi İptal Et"
                                                                            wire:click.prevent="removeCoupon"><i
                                                                                class="bx bx-x"></i></a>
                                                                    </td>



                                                                </tr>

                                                                <tr class="shipping">
                                                                    <th>İndirimli Ara Toplam</th>
                                                                    <td class="text-right">
                                                                        <span class="amount"> Toplam
                                                                            {{ number_format($subtotalAfterDiscount, 2) }}₺
                                                                        </span>


                                                                    </td>

                                                                </tr>
                                                                <tr class="shipping">
                                                                    <th>Vergi</th>
                                                                    <td class="text-right">
                                                                        <span class="amount">
                                                                            ({{ config('cart.tax') }}%)
                                                                            {{ number_format($taxAfterDiscount, 2) }}₺
                                                                        </span>

                                                                    </td>


                                                                </tr>

                                                                <tr class="shipping">
                                                                    <th>Toplam</th>
                                                                    <td class="text-right">
                                                                        <span class="amount"> Toplam
                                                                            {{ number_format($totalAfterDiscount, 2) }}₺
                                                                            <a href="#"
                                                                                wire:click.prevent="removeCoupon">
                                                                        </span>


                                                                    </td>

                                                                </tr>
                                                            @else

                                                                <tr class="shipping">
                                                                    <th>KDV</th>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="amount">{{ Cart::instance('cart')->tax() }}₺</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="order-total">
                                                                    <th>Toplam</th>
                                                                    <td class="text-right">
                                                                        <strong><span
                                                                                class="amount">{{ Cart::instance('cart')->total() }}₺</span></strong>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                        </tbody>
                                                    </table>
                                                    <div
                                                        class="form-group clearfix d-flex align-items-center justify-content-between">
                                                        <div class="mr-auto">
                                                            <a href="/shop"> <input type="submit"
                                                                    class="btn btn-primary" value="Alışverişe Devam Et">
                                                            </a>
                                                        </div>

                                                        <div class="ml-auto">
                                                            <a href="#" class="btn btn-primary"
                                                                wire:click.prevent="checkout">Ödeme Yap</a>
                                                        </div>
                                                    </div>

                                                    @endif
                                                      <!--         <div class="text-right">
                                                        <a href="#!" class="shipping-calculator-button effect"
                                                            data-slide-toggle=".shipping-calculator-form">Kargoyu
                                                            Hesapla
                                                        </a>
                                                    </div>
                                                   <div class="shipping-calculator-form inputs-border inputs-bg"
                                                        style="display: none;">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>Select a Country..</option>
                                                                <option value="SY">Syria</option>
                                                                <option value="UK">United Kingdom</option>
                                                                <option value="US">United States</option>
                                                                <option value="TR">Turkey</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>Select an City..</option>
                                                                <option value="SY">Syria</option>
                                                                <option value="UK">United Kingdom</option>
                                                                <option value="US">United States</option>
                                                                <option value="TR">Turkey</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Postcode / Zip">
                                                        </div>
                                                        <div class="form-group text-right">
                                                            <button type="submit" class="btn btn-primary">Update
                                                                Totals</button>
                                                        </div>
                                                    </div>
                                                -->
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>
