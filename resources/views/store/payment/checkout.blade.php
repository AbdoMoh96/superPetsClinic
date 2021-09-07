<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Checkout </title>
        <style>
            .hide{
                display: none;
            }
        </style>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Checkout</h2></div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">
                        <form action="{{route('store.checkout.post')}}" method="post" class="row justify-content-center">
                            @csrf
{{--                            address form--}}
                            <div class="col-lg-11 col-sm-12 col-xs-12" id="address_div">
                                <div class="checkout-details">
                                    <div class="order-box">
                                      <div class="title-box">
                                          <div>Choose Delivery Address</div>
                                      </div>

                                        <select name="user_address" id="" class="form-control">
                                            @foreach(auth()->user()->address as $address)
                                             <option value="{{$address->id}}">({{$address->city}}) - {{$address->street}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="d-flex flex-row-reverse justify-content-between">
                                        <button id="next" type="button" class="btn-solid btn">Next</button>
                                    </div>
                                </div>
                            </div>

{{--                            checkout form--}}
                            <div class="col-lg-11 col-sm-12 col-xs-12 hide" id="checkout_div">
                                <div class="checkout-details">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Product <span>Total</span></div>
                                        </div>
                                        <ul class="qty">
                                            @foreach(auth()->user()->cart as $product)
                                             <li> ({{$product->{'product_'.app()->getLocale()}->title}}) {{$product->price}} X {{$product->pivot->quantity}}
                                                 <span>EGP {{$product->price * $product->pivot->quantity}}</span>
                                             </li>
                                            @endforeach
                                        </ul>
                                        <ul class="sub-total">
                                            <li>Subtotal <span class="count">EGP {{auth()->user()->cartCount()}}</span></li>


                                        </ul>
                                        <ul class="total">
                                            <li>Total <span class="count">EGP {{auth()->user()->cartCount()}}</span></li>
                                        </ul>
                                    </div>
                                    <div class="payment-box">
                                        <div class="upper-box">
                                            <div class="payment-options">
                                                <ul>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio" name="payment_option" id="payment-2" checked>
                                                            <label for="payment-2">(COD) Cash On Delivery</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
{{--                                            </form>--}}
                                        </div>
                                        {{--<div class="text-right">
                                            <a
                                               onclick="document.getElementById('checkout_form').submit()"
                                               class="btn-solid btn">
                                                Place Order
                                            </a>
                                        </div>--}}
                                        <div class="d-flex justify-content-between mt-5">
                                            <button id="previous" type="button" class="btn-solid btn">Previous</button>
                                            <button type="submit" class="btn-solid btn">Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->


    <x-slot name="scripts">
        <script src="{{asset('store/js/views/checkout/checkout.js')}}"></script>
    </x-slot>

</x-store.layout>
