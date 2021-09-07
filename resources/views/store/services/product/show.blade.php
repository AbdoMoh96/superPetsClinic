<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Product </title>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{trans('store.product_crumb_title')}}</h2></div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('store.index')}}">{{trans('store.home_crumb_title')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('store.products')}}">{{trans('store.product_products_crumb_title')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{trans('store.product_crumb_title')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-sm-2 col-xs-12">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-right-nav">
                                    <div><img src="{{asset($product->thumbnail)}}" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                                    @foreach($product->gallery as $image)
                                        <div><img src="{{asset($image->path)}}" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-10 col-xs-12 order-up">
                        <div class="product-right-slick">
                            <div><img src="{{asset($product->thumbnail)}}" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                            @foreach($product->gallery as $image)
                                <div><img src="{{asset($image->path)}}" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>{{$product->{'product_'.app()->getLocale()}->title}}</h2>
{{--                            <h4><del>$459.00</del><span>55% off</span></h4>--}}
                            <h3>EGP {{$product->price}}</h3>
                            {{--<ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>--}}
                            <div class="product-description border-product">
                                <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Sheer Straight Kurta</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body"><img src="" alt="" class="img-fluid blur-up lazyload"></div>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div>--}}
                                <h6 class="product-title">{{trans('store.product_quantity')}}</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend">
                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                        <i class="ti-angle-left"></i>
                                    </button>
                                </span>
                                        <input
                                            type="text"
                                            name="quantity"
                                            class="form-control input-number quantity"
                                            min="1"
                                            value="1">
                                        <span class="input-group-prepend">
                                        <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                            <i class="ti-angle-right"></i>
                                        </button>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-buttons">
                                <a href="#"
                                   onclick="itemIncrementProduct('{{$product->code}}')"
                                   data-toggle="modal" data-target="#addtocart" class="btn btn-solid">
                                    {{trans('store.product_add_to_cart')}}
                                </a>
                                <a href="#" onclick="itemBuyNow('{{$product->code}}')" class="btn btn-solid">{{trans('store.product_buy_now')}}</a>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">{{trans('store.product_details')}}</h6>
                                {!! $product->{'product_'.app()->getLocale()}->description !!}
                            </div>
                            <div class="border-product">

                                {{--<div class="product-icon">
                                    <form class="d-inline-block">
                                        <button class="wishlist-btn"><i class="fa fa-heart"></i><span class="title-font">Add To WishList</span></button>
                                    </form>
                                </div>--}}
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- product-tab starts -->
    {{--
    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">

                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link" id="review-top-tab" href="#top-review" role="tab" aria-selected="false">Write Review</a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <form class="theme-form">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="media">
                                        <label>Rating</label>
                                        <div class="media-body ml-3">
                                            <div class="rating three-star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="review">Review Title</label>
                                    <input type="text" class="form-control" id="review" placeholder="Enter your Review Subjects" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="review">Review Title</label>
                                    <textarea class="form-control" placeholder="Wrire Your Testimonial Here" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-solid" type="submit">Submit YOur Review</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
    <!-- product-tab ends -->


    <!-- product section start -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>{{trans('store.related_products')}}</h2></div>
            </div>
            <div class="row search-product">

             @foreach($relatedProducts as $related)
                 @if($related->id !== $product->id)
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="{{route('store.product.show' , $related->slug)}}">
                                    <img src="{{asset($related->thumbnail)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                </a>
                            </div>
                            <div class="back">
                                <a href="{{route('store.product.show' , $related->slug)}}">
                                    <img src="{{asset($related->thumbnail)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                </a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button onclick="cartAdd('{{$related->code}}')"
                                        data-toggle="modal"
                                        data-target="#addtocart"
                                        title="Add to cart">
                                    <i class="ti-shopping-cart" ></i>
                                </button>
                                {{--<a href="javascript:void(0)" title="Add to Wishlist">
                                    <i class="ti-heart" aria-hidden="true"></i>
                                </a> --}}
                                <a href="{{route('store.product.show' , $related->slug)}}" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                    <i class="ti-search" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a href="{{route('store.product.show' , $related->slug)}}">
                                <h6>{{$related->{'product_'.app()->getLocale()}->title}}</h6>
                            </a>
                            <h4>EGP {{$related->price}}</h4>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- product section end -->

</x-store.layout>
