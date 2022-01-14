<li>
    <a href="{{route('product.wishlist' )}}" class="px-2">Favoriler

        @if (Cart::instance('wishlist')->count() > 0 )
            <span> ({{Cart::instance('wishlist')->count()}})</span>
        @endif


    </a>
</li>