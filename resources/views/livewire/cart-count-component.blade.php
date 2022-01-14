    <li>
        <a href="/cart" class="px-2">Sepet

            <span> @if(Cart::instance('cart')->count() > 0) 
                
       ({{Cart::instance('cart')->count()}}) 
                
                @endif </span>
        </a>
    </li>
