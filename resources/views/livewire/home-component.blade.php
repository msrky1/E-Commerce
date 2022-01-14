<main>
    <div class="swiper-slider">

    <div class="swiper-container" dir="ltr">

        <div class="swiper-wrapper text-center">
            @foreach ($homeslider as $s)
                <div class="swiper-slide">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('storage') }}/sliders/{{ $s->image }}" class="img-fluid"
                            alt="{{ $s->link }}">
                    </div>
                </div>
            @endforeach


        </div>

        <div class="swiper-pagination swiper-pagination-white"></div>

        <div class="d-none d-md-block">
            <div class="swiper-button-prev swiper-button-white"><i class="bx bx-chevron-left"></i></div>
            <div class="swiper-button-next swiper-button-white"><i class="bx bx-chevron-right"></i></div>
        </div>
    </div>
</div>
<section class="section collections pb-0 small-padding-top" id="home-collections">
    <div class="container">
        <div class="row">
            <div class="col-md-6 collection">
                <a href="#!">
                    <img src="{{ asset('assets') }}/dist/images/collections/01.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 collection">
                        <a href="#!">
                            <img src="{{ asset('assets') }}/dist/images/collections/02.jpg" class="img-fluid"
                                alt="">
                        </a>
                    </div>
                    <div class="col-md-6 collection">
                        <a href="#!">
                            <img src="{{ asset('assets') }}/dist/images/collections/03.jpg" class="img-fluid"
                                alt="">
                        </a>
                    </div>
                    <div class="col-sm-12 collection">
                        <a href="#!">
                            <img src="{{ asset('assets') }}/dist/images/collections/04.jpg" class="img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section promotions pb-0" id="promotions">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="promotion media">
                    <div class="media-left media-middle">
                        <i class="bx bx-money"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Money Back</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="promotion media">
                    <div class="media-left media-middle">
                        <i class="bx bx-globe"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">In Worldwide</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="promotion media">
                    <div class="media-left media-middle">
                        <i class="bx bxs-plane"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Free Shipping</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section products second-style" id="home-products">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title text-center">
                <h3><i class="line"></i>Yeni Ürünler<i class="line"></i></h3>
                <p>Yeni Ürünlere Göz Atın!</p>
            </div>
            <div class="col-sm-12">
                <div class="masonry row">
                    
                   
                   
                   
                   
                    @foreach ($lproducts as $lproduct)
                        

                   
                    <div class="product col-lg-3 col-md-6" data-product-id="1">
                        <div class="inner-product">
                            <div class="product-thumbnail">
                                <img src="{{ asset('storage') }}/products/{{$lproduct->image}}" class="img-fluid"
                                    alt="{{$lproduct->image}}">
                            </div>
                            <div class="product-details text-center">
                                <div class="product-btns">
                                    <span data-toggle="tooltip" data-placement="top" title="Add To Cart"  wire:click.prevent="store({{$lproduct->id }}, '{{$lproduct->name}}', {{$lproduct->regular_price}})">
                                        <a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
                                    </span>
                                    <span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
                                        <a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
                                    </span>
                                    <span data-toggle="tooltip" data-placement="top" title="View">
                                        <a href="{{route('product.details', [$lproduct->slug]) }}" class="li-icon view-details"><i
                                                class="bx bx-search"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <h3 class="product-title"><a href="{{route('product.details' , [ $lproduct->slug ])}}">{{$lproduct->name}}</a></h3>
                        <div class="star-rating">
                            <span style="width:90%"></span>
                        </div>
                        <p class="product-price">
                            <ins>
                                <span class="amount">{{$lproduct->sale_price}}₺</span>
                            </ins>
                        </p>
                    </div>

                    @endforeach
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <a href="/shop" class="btn btn-primary">Tüm Ürünler</a>
            </div>
        </div>
    </div>
</section>
<section class="section brands pt-0 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="logos" class="owl-carousel">
                    <div class="item">
                        <a href="#!"><img src="{{ asset('assets') }}/dist/images/brands/5.png" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#!"><img src="{{ asset('assets') }}/dist/images/brands/6.png" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#!"><img src="{{ asset('assets') }}/dist/images/brands/4.png" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#!"><img src="{{ asset('assets') }}/dist/images/brands/7.png" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#!"><img src="{{ asset('assets') }}/dist/images/brands/8.png" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#!"><img src="{{ asset('assets') }}/dist/images/brands/9.png" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#!"><img src="{{ asset('assets') }}/dist/images/brands/1.png" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#!"><img src="{{ asset('assets') }}/dist/images/brands/2.png" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#!"><img src="{{ asset('assets') }}/dist/images/brands/3.png" class="img-fluid"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>