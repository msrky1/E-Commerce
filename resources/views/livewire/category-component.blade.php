<main>
    <section class="section products-grid second-style">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="shop-sidebar shop-sidebar-left">
                        <div class="widgets">
                            <div class="widget widget-search">
                                <h3 class="widget-title">{{$category_name}}<span class="typed-cursor"></span></h3>
                                <form action="#!" method="GET" class="inputs-border inputs-bg">
                                    <input type="text" class="form-control" placeholder="Search Products..">
                                </form>
                            </div>
                            <div class="widget widget-price-filter">
                                <h3 class="widget-title">Fiyata Göre Filtrele</h3>
                                <div class="price-slider-wrapper">
                                    <div id="filter-slider" class="filter-slider" data-min="10" data-max="1000"
                                        data-values="150,700"></div>
                                </div>
                                <form action="">
                                    <div id="amount-slider">
                                        <strong>Price: </strong><span>$150 — $700</span>
                                    </div>
                                    <input type="hidden" id="price" value="150,700">
                                    <button type="button" class="btn btn-primary">Filtre</button>
                                </form>
                            </div>
                            <div class="widget widget-sizes">
                                <h3 class="widget-title">Boyut</h3>
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
                                        <a href="{{route('product.category' , ['category_slug'  => $category->slug])}}">{{$category->name}} <span class="count">(4)</span></a>
                                    </li>

                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget widget-top-seller">
                                <h3 class="widget-title">En Çok Satılanlar</h3>
                                <ul>
                                    <li class="clearfix">
                                        <div class="media">
                                            <div class="media-left float-left">
                                                <a href="#">
                                                    <img class="media-object img-fluid"
                                                        src="{{asset('storage')}}/products/20.jpg">
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
                                                        src="{{asset('storage')}}/products/12.jpg" alt="">
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
                                                        src="{{asset('storage')}}/products/23.jpg" alt="">
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
                                            <img src="{{asset('storage')}}/products/23.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#!">
                                            <img src="{{asset('storage')}}/products/20.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#!">
                                            <img src="{{asset('storage')}}/products/18.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#!">
                                            <img src="{{asset('storage')}}/products/19.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#!">
                                            <img src="{{asset('storage')}}/products/24.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#!">
                                            <img src="{{asset('storage')}}/products/12.jpg" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="masonry row">



                       @foreach($products as $product)
                        <div class="product col-lg-4 col-md-6" data-product-id="1">
                            <div class="inner-product">
                                <div class="product-thumbnail">
                                    <img src="{{asset('storage')}}/products/{{$product->image}}" class="img-fluid" alt="{{$product->image}}s">
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-btns">
                                        <span data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                            <a href="#!" class="li-icon add-to-cart" wire:click.prevent="store({{$product->id }}, '{{$product->name}}', {{$product->regular_price}})"><i class="bx bxs-cart"></i></a>
                                        </span>
                                        <span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
                                            <a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
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
                                    <span class="amount">{{$product->regular_price}}</span>
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
