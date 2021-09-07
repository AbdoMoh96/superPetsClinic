<li class="onhover-div mobile-cart">
    <div>
        <img
             src="{{asset('store/images/icon/cart.png')}}"
             class="img-fluid blur-up lazyload"
             alt="">
        <span id="notification-bell" class="badge badge-pill badge-danger">0</span>
        <i class="ti-shopping-cart"></i>
    </div>
    <ul class="show-div shopping-cart">

        <div class="shopping-cart-items">
        @foreach(auth()->user()->cart as $product)
        <li>
            <div class="media">
                <a href="{{route('store.product.show' , $product->slug)}}">
                    <img class="mr-3" src="{{asset($product->thumbnail)}}" alt="Generic placeholder image">
                </a>
                <div class="media-body">
                    <a href="{{route('store.product.show' , $product->slug)}}">
                        <h4>{{$product->{'product_'.app()->getLocale()}->title }}</h4>
                    </a>
                    <h4><span>{{$product->pivot->quantity}} x EGP {{$product->price}}</span></h4>
                </div>
            </div>
            <div class="close-circle">
                <a href="#" onclick="cartRemove('{{$product->code}}')">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </li>
        @endforeach
        </div>

        <li>
            <div class="total">
                <h5>{{trans('store.cart_section_subtotal')}} : <span id="cart_count">EGP {{auth()->user()->cartCount()}}</span></h5>
            </div>
        </li>
        <li>
            <div class="buttons">
                <a href="{{route('store.cart.show')}}" class="view-cart">{{trans('store.cart_section_view_cart')}}</a>
                <a href="{{route('store.checkout')}}" class="checkout">{{trans('store.cart_section_checkout')}}</a>
            </div>
        </li>
    </ul>
</li>
