<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Home </title>
    </x-slot>

{{--    @if(session()->has('message')) <p> {{session()->get('message')}} </p> @endif--}}
    <!-- Home slider -->
    <section class="p-0 small-slider">
        <div class="slide-1 home-slider">

     @foreach($homePageSlider->slides as $slide)
            <div>
                <div class="home ">
                    <img src="{{asset($slide->image_path)}}" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4> {{$slide->{'slide_'.app()->getLocale()}->title}} </h4>
                                        <h1> {{$slide->{'slide_'.app()->getLocale()}->subtitle}} </h1>
                                        <a href="{{$slide->url}}"
                                           class="btn btn-solid">
                                            {{$slide->{'slide_'.app()->getLocale()}->btn_text}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Home slider end -->



    <!-- Banner section -->
    <section class="pt-50 banner-6 j-box ratio2_1">
        <div class="container">
            <div class="row partition3">

               @foreach($categories as $category)
                <div class="col-md-3">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="{{route('store.products.categories.get' , $category->name)}}">
                                    <img src="{{asset($category->image)}}" class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a href="{{route('store.products.categories.get' , $category->name)}}">
                                <h6>{{$category->getTranslation('name', app()->getLocale())}}</h6>
                            </a>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>
    <!-- banner section End -->


    <!-- Product slider -->
    <section class="section-b-space j-box pets-box ratio_square">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title1 title5">
                        <h2 class="title-inner1">{{trans('store.home_page_top_collection')}}</h2>
                        <hr role="tournament6">
                    </div>
                    <div class="product-4 product-m no-arrow">

                        @foreach($products as $product)
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="{{route('store.product.show' , $product->slug)}}">
                                        <img src="{{asset($product->thumbnail)}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <button title="Add to cart"
                                            onclick="cartAdd('{{$product->code}}')"
                                    >
                                        <i class="ti-shopping-cart" ></i>
                                    </button>
{{--                                    <a href="wishlist.html" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>--}}
                                    <a href="{{route('store.product.show' , $product->slug)}}" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="product-detail">
{{--                                <div class="rating">--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
                                <a href="{{route('store.product.show' , $product->slug)}}">
                                    <h6>{{$product->{'product_'.app()->getLocale()}->title }}</h6>
                                </a>
                                <h4>EGP {{$product->price}}</h4>
                            </div>
                        </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product slider end -->


    <!-- Parallax banner -->
    <section class="p-0 pet-parallax">
        <div class="full-banner parallax  text-center p-center">
            <img src="images/11.jpg" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h4>{{trans('store.home_page_new_arrivals')}}</h4>
                            <h3>{{trans('store.home_page_offer')}}</h3>

                            <a href="{{route('store.products')}}" class="btn btn-solid black-btn" tabindex="0">
                                {{trans('store.home_page_offer_btn')}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pet-decor">
                <img src="images/dog.png" alt="" class="img-fluid blur-up lazyload">
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->


    <!-- logo section -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-6 no-arrow">

                      @foreach($partnersSlider->slides as $slide)
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="{{asset($slide->image_path)}}" alt="partner_image">
                                </a>
                            </div>
                        </div>
                      @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- logo section end -->



    <x-slot name="scripts">
        <!--modal popup start-->
{{--          <x-store.partials.popup/>--}}
        <!--modal popup end-->
        {{--<script>
            $(window).on('load', function() {
                $('#exampleModal').modal('show');
            });
            $(function() {
                $.exitIntent('enable');
                $(document).bind('exitintent', function() {
                    if(typeof(Storage) !== "undefined") {
                        if(sessionStorage.exit_popup == 'true'){
                        }
                        else{
                            sessionStorage.exit_popup = 'true';
                            setTimeout(function () {
                                if( $.cookie("exit-popup") == 'hide_exit_popup' ){
                                }
                                else{
                                    $("#exit_popup").modal('show');
                                }
                            }, 100);
                        }
                    }
                });
                $("#exit_popup a").bind('click', function() {
                    $("#exit_popup").hide();
                    return false;
                });
            });
        </script>--}}

        <script>
            @if(session()->has('message'))
            swal({
                icon: "info",
                text: '{{session()->get('message')}}',
                button:"Okay"
            });
            @endif
            @if(session()->has('success'))
            swal({
                icon: "success",
                text: '{{session()->get('success')}}',
                button:"Okay"
            });
            @endif
            @if(session()->has('danger'))
            swal({
                icon: "error",
                text: '{{session()->get('danger')}}',
                button:"Okay"
            });
            @endif
        </script>
    </x-slot>

</x-store.layout>
