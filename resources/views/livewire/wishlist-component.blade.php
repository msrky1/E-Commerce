<main>
    <section class="section products-grid second-style">
        <div class="container">
            <div class="row">

          @if (Cart::instance('wishlist')->content()->count() > 0)
              
       
                <div class="col-md-9">
                    <div class="masonry row">
                        @php
                            $witems = Cart::instance('wishlist')
                                ->content()
                                ->pluck('id');
                        @endphp


                        @foreach (Cart::instance('wishlist')->content() as $item)
                            <div class="product col-lg-4 col-md-6" data-product-id="1">
                                <div class="inner-product">


                                    @if (!$item->sale == '')
                                        <span class="onsale">İndirim</span><br>

                                        {{ $item->model->getSale->sale }}
                                    @endif




                                    <style>
                                        .fill-heart {

                                            color: red;

                                        }

                                    </style>



                                    <div class="product-thumbnail">
                                        <img src="{{ asset('storage') }}/products/{{ $item->model->image }}"
                                            class="img-fluid" alt="{{ $item->model->image }}">
                                    </div>
                                    <div class="product-details text-center">
                                        <div class="product-btns">
                                            <span data-toggle="tooltip" data-placement="top" title="Sepete Ekle">
                                                <a href="#!" class="li-icon add-to-cart"
                                                    wire:click.prevent="store({{ $item->id }}, '{{ $item->model->name }}', {{ $item->model->regular_price }})"><i
                                                        class="bx bxs-cart"></i></a>
                                            </span>
                                            <span data-toggle="tooltip" data-placement="top" title="Favorinden Çıkart">
                                                @if ($witems->contains($item->model->id))

                                                    <a href="#!"
                                                        wire:click.prevent="removeFromWishlist({{ $item->model->id }})"
                                                        class="li-icon"><i
                                                            class="bx bx-heart fill-heart"></i></a>
                                                @else
                                                    <a href="#!"
                                                        wire:click.prevent="addToWhishlist({{ $item->model->id }}, '{{ $item->model->name }}', {{ $item->model->regular_price }})"
                                                        class="li-icon"><i class="bx bx-heart"></i></a>

                                                @endif
                                            </span>

                                            <span data-toggle="tooltip" data-placement="top" title="View">
                                                <a href="{{ route('product.details', $item->model->slug) }}"
                                                    class="li-icon view-details"><i class="bx bx-search"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="product-title"><a href="#!">{{ $item->model->name }}</a></h3>
                                <div class="star-rating">
                                    <span style="width:100%"></span>
                                </div>
                                <p class="product-price">
                                    <ins>
                                        <span class="amount">{{ $item->model->regular_price }}</span>
                                    </ins>
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div class="clearfix text-center">



                        @else 
              
                        Favorinizde Ürün Bulunmamaktadır!
        
        
                        @endif
        




                    </div>
                </div>


                


            </div>

        </div>

    </section>
</main>
