<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Cart </title>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{trans('store.cart_crumb_title')}}</h2></div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('store.index')}}">{{trans('store.home_crumb_title')}}</a></li>
                            <li class="breadcrumb-item active">{{trans('store.cart_crumb_title')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                        <tr class="table-head">
                            <th scope="col">{{trans('store.cart_th_image')}}</th>
                            <th scope="col">{{trans('store.cart_th_product_name')}}</th>
                            <th scope="col">{{trans('store.cart_th_price')}}</th>
                            <th scope="col">{{trans('store.cart_th_quantity')}}</th>
                            <th scope="col">{{trans('store.cart_th_action')}}</th>
                            <th scope="col">{{trans('store.cart_th_total')}}</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach(auth()->user()->cart as $product)
                        <tr id="{{$product->code}}" class="cart-show-item {{$product->code}}">
                            <td>
                                <a href="{{route('store.product.show' , $product->slug)}}">
                                    <img src="{{asset($product->thumbnail)}}" alt="">
                                </a>
                            </td>
                            <td><a href="{{route('store.product.show' , $product->slug)}}">
                                    {{$product->{'product_'.app()->getLocale()}->title }}
                                </a>
                                <div class="mobile-cart-content row">
                                    <div class="col-xs-3">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input
                                                    type="number"
                                                    name="quantity"
                                                    class="form-control input-number"
                                                    min="1"
                                                    max="{{$product->quantity}}"
                                                    onchange="itemIncrement(this , '{{$product->code}}' , {{$product->price}})"
                                                    value="{{$product->pivot->quantity}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color"></h2></div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">
                                            <a href="#" class="icon">
                                                <i class="ti-close"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>EGP {{$product->price}}</h2></td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number"
                                               name="quantity"
                                               min="1"
                                               max="{{$product->quantity}}"
                                               class="form-control input-number"
                                               onchange="itemIncrement(this , '{{$product->code}}' , {{$product->price}})"
                                               value="{{$product->pivot->quantity}}">
                                    </div>
                                </div>
                            </td>
                            <td><a href="#"
                                   onclick="cartRemove('{{$product->code}}')"
                                   class="icon">
                                    <i class="ti-close"></i>
                                </a>
                            </td>
                            <td>
                                <h2 id="total{{$product->code}}" class="td-color">
                                    EGP {{$product->price * $product->pivot->quantity}}
                                </h2></td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <table class="table cart-table table-responsive-md">
                        <tfoot>
                        <tr>
                            <td>{{trans('store.cart_total_price')}} :</td>
                            <td>
                                <h2 id="cart_count_show">EGP {{auth()->user()->cartCount()}}</h2></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-6"><a href="{{route('store.products')}}" class="btn btn-solid">{{trans('store.cart_page_continue_btn')}}</a></div>
                <div class="col-6"><a href="{{route('store.checkout')}}" class="btn btn-solid">{{trans('store.cart_page_checkout_btn')}}</a></div>
            </div>
        </div>
    </section>
    <!--section end-->

</x-store.layout>
