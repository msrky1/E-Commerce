<main>
    <section class="section products-grid second-style">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="shop-sidebar shop-sidebar-left">
                        <div class="widgets">
                            <div class="widget widget-search">
                                <h3 class="widget-title">What's on your mind<span class="typed-cursor">?</span></h3>
                                <form action="#!" method="GET" class="inputs-border inputs-bg">
                                    <input type="text" class="form-control" placeholder="Search Products..">
                                </form>
                            </div>
                            <div class="widget widget-price-filter">
                                <h3 class="widget-title">Ürünü filtrele</h3>
                                <div class="price-slider-wrapper">
                                    <div  id="filter-slider" class="filter-slider" wire:ignore data-min="{{$min_price}}" data-max="{{$max_price}}"
                                        data-values="1,1000"></div>
                                </div>
                                <form action="">
                                    <div id="amount-slider">
                                        <strong>Price: </strong><span>₺{{$min_price}} — ₺{{$max_price}}</span>
                                    </div>
                                    <input type="hidden" id="price" value="150,700">
                                    <button type="button" class="btn btn-primary">Filter</button>
                                </form>
                            </div>
                            <div class="widget widget-sizes">
                                <h3 class="widget-title">Sizes</h3>
                                <ul>
                                    <li><a href="#!">XS</a></li>
                                    <li><a href="#!">S</a></li>
                                    <li><a href="#!">M</a></li>
                                    <li><a href="#!">L</a></li>
                                    <li><a href="#!">XL</a></li>
                                </ul>
                            </div>
                            <div class="widget widget-categories">
                                <h3 class="widget-title">Kategoriler</h3>
                                <ul>
                                 @foreach($categories as $category)


                                    <li>
                                        <a href="{{route('product.category' , ['category_slug'  => $category->slug ])}}">{{$category->name}} <span class="count">(4)</span></a>
                                    </li>

                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget widget-top-seller">
                                <h3 class="widget-title">Top Seller</h3>
                                <ul>
                                    <li class="clearfix">
                                        <div class="media">
                                            <div class="media-left float-left">
                                                <a href="#">
                                                    <img class="media-object img-fluid"
                                                        src="{{asset('assets')}}/dist/images/products/20.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="product.html">Men Cap</a></h4>
                                                <div class="rating">
                                                    <div class="star-rating">
                                                        <span style="width:90%"></span>
                                                    </div>
                                                </div>
                                                <p class="price">
                                                    <del>
                                                        <span class="amount">$200.00</span>
                                                    </del>
                                                    <ins>
                                                        <span class="amount">$450.00</span>
                                                    </ins>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="media">
                                            <div class="media-left float-left">
                                                <a href="#">
                                                    <img class="media-object img-fluid"
                                                        src="{{asset('assets')}}/dist/images/products/12.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="product.html">Twill Silk Scarf</a>
                                                </h4>
                                                <div class="rating">
                                                    <div class="star-rating">
                                                        <span style="width:100%"></span>
                                                    </div>
                                                </div>
                                                <p class="price">
                                                    <ins>
                                                        <span class="amount">$90.00</span>
                                                    </ins>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="media">
                                            <div class="media-left float-left">
                                                <a href="#">
                                                    <img class="media-object img-fluid"
                                                        src="{{asset('assets')}}/dist/images/products/23.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="product.html">Glasses Patterned</a>
                                                </h4>
                                                <div class="rating">
                                                    <div class="star-rating">
                                                        <span style="width:99%">
                                                        </span>
                                                    </div>
                                                </div>
                                                <p class="price">
                                                    <del>
                                                        <span class="amount">$25.00</span>
                                                    </del>
                                                    <ins>
                                                        <span class="amount">$99.00</span>
                                                    </ins>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-instagram">
                                <h3 class="widget-title">Instagram</h3>
                                <ul class="row">
                                    <li class="col-4">
                                        <a href="#!">
                                            <img src="{{asset('assets')}}/dist/images/products/23.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#!">
                                            <img src="{{asset('assets')}}/dist/images/products/20.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#!">
                                            <img src="{{asset('assets')}}/dist/images/products/18.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#!">
                                            <img src="{{asset('assets')}}/dist/images/products/19.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#!">
                                            <img src="{{asset('assets')}}/dist/images/products/24.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#!">
                                            <img src="{{asset('assets')}}/dist/images/products/12.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="masonry row">
                    @php 
                     $witems = Cart::instance('wishlist')->content()->pluck('id');
                    @endphp


                       @foreach($products as $product)
                        <div class="product col-lg-4 col-md-6" data-product-id="1">
                            <div class="inner-product">
                             
                                       
                             @if (!$product->sale == "")
                             <span class="onsale">İndirim</span><br>

                             {{$product->getSale->sale}}
                             @endif
                         

              
                      
                             <style>

                                 .fill-heart {

                                       color:red;
                                            
                                 }

                                 </style>


                           
                                <div class="product-thumbnail">
                                    <img src="{{asset('storage')}}/products/{{$product->image}}" class="img-fluid" alt="{{$product->image}}">
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-btns">
                                        <span data-toggle="tooltip" data-placement="top" title="Sepete Ekle">
                                            <a href="#!" class="li-icon add-to-cart" wire:click.prevent="store({{$product->id }}, '{{$product->name}}', {{$product->regular_price}})"><i class="bx bxs-cart"></i></a>
                                        </span>
                                        <span data-toggle="tooltip" data-placement="top" title="Favorilerine Ekle">
                                            @if($witems->contains($product->id))

                                            <a href="#!" wire:click.prevent="removeFromWishlist({{$product->id}})" class="li-icon"><i class="bx bx-heart fill-heart"></i></a>
                                            @else 
                                            <a href="#!" wire:click.prevent = "addToWhishlist({{$product->id }}, '{{$product->name}}', {{$product->regular_price}})" class="li-icon"><i class="bx bx-heart"></i></a>

                                            @endif
                                        </span>
                                  
                                        <span data-toggle="tooltip" data-placement="top" title="View">
                                            <a href="{{route('product.details' , $product->slug)}}" class="li-icon view-details"><i
                                                    class="bx bx-search"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <h3 class="product-title"><a href="#!">{{$product->name}}</a></h3>
                            <div class="star-rating">
                                <span style="width:100%"></span>
                            </div>
                            <p class="product-price">
                                <ins>
                                    <span class="amount">{{$product->regular_price}}$</span>
                                </ins>
                            </p>
                        </div>
                        @endforeach
                    </div>
                    <div class="clearfix text-center">



                        {{ $products->links('vendor.pagination.custom-pagination')}}





                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@push('scripts')

<script>


 var slider = document.getElementlyById('filter-slider');

       nouSlider.create(slider,{

         start: [1,1000],

         connect:true;
         range: {

             'min' : 1, 

             'max' : 1000


         },


         pips: {

             mode: 'steps',
             stepped: true;
             density:4
         }

       });


       slider.nouSlider.on('update' , function (value){

         @this.set('min_price' , value[0]);
         @this.set('max_price' , value[1000]);
       });
    </script>
    
@endpush