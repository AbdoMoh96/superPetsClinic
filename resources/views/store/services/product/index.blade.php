<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Products </title>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{trans('store.products_crumb_title')}}</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('store.index')}}">{{trans('store.home_crumb_title')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{trans('store.products_crumb_title')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- section start -->
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 collection-filter">
                        <!-- side-bar colleps block stat -->
                        <div class="collection-filter-block">
                            <!-- brand filter start -->
                            <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">{{trans('store.products_pets_categories')}}</h3>
                                <div class="collection-collapse-block-content">
                                 <form id="category_form" method="post" action="{{route('store.products.categories.post')}}">
                                     @csrf
                                    <div class="collection-brand-filter">

                                        @foreach($categories as $category)
                                        <div class="custom-control custom-checkbox collection-filter-checkbox">
                                            <input type="checkbox"
                                                   name="categories[]"
                                                   class="custom-control-input"
                                                   @if(strpos(request()->url() , $category->name) && request()->routeIs('store.products.categories.get'))
                                                    checked
                                                   @endif
                                                   onchange="document.getElementById('category_form').submit()"
                                                   value="{{$category->name}}"
                                                   id="{{$category->id}}">
                                            <label class="custom-control-label" for="{{$category->id}}">
                                                {{$category->getTranslation('name', app()->getLocale())}}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                  </form>
                                </div>
                            </div>

                        </div>
                        <!-- silde-bar colleps block end here -->

                        <!-- side-bar banner start here -->
                        <div class="collection-sidebar-banner">
                            <a href="#"><img src="images/side-banner.png" class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                        <!-- side-bar banner end here -->
                    </div>
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">


                                    <div class="collection-product-wrapper">


                                        <div class="product-wrapper-grid">
                                            <div class="row">
                                          @foreach($products as $product)
                                                <div class="col-lg-4 col-md-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="{{route('store.product.show' , $product->slug)}}">
                                                                    <img src="{{asset($product->thumbnail)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="{{route('store.product.show' , $product->slug)}}">
                                                                    <img src="{{asset($product->thumbnail)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button title="Add to cart" onclick="cartAdd('{{$product->code}}')">
                                                                    <i class="ti-shopping-cart"></i>
                                                                </button>
{{--                                                                <a title="Add to Wishlist">--}}
{{--                                                                    <i class="ti-heart" aria-hidden="true"></i>--}}
{{--                                                                </a>--}}
                                                                <a href="{{route('store.product.show' , $product->slug)}}" title="Quick View">
                                                                    <i class="ti-search" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
{{--                                                            <div class="rating">--}}
{{--                                                                <i class="fa fa-star"></i> --}}
{{--                                                                <i class="fa fa-star"></i> --}}
{{--                                                                <i class="fa fa-star"></i> --}}
{{--                                                                <i class="fa fa-star"></i> --}}
{{--                                                                <i class="fa fa-star"></i>--}}
{{--                                                            </div>--}}
                                                            <a href="{{route('store.product.show' , $product->slug)}}">
                                                                <h6>{{$product->{'product_'.app()->getLocale()}->title}}</h6>
                                                            </a>


                                                            <h4>EGP {{$product->price}}</h4>


                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    @if($products->hasPages())
                                    <div class="product-pagination">
                                        <div class="theme-paggination-block">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <nav aria-label="Page navigation">
                                                        <ul class="pagination">
                                                            <li class="page-item">
                                                                <a class="page-link" href="{{$products->previousPageUrl()}}" aria-label="Previous">
                                                                    <span aria-hidden="true">
                                                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                                    </span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            @for($page = 1; $page <= $products->lastPage(); $page++)
                                                              <li class="page-item @if($products->currentPage() === $page) active @endif">
                                                                  <a class="page-link" href="{{$products->url($page)}}">{{$page}}</a>
                                                              </li>
                                                            @endfor
                                                            <li class="page-item">
                                                                <a class="page-link" href="{{$products->nextPageUrl()}}" aria-label="Next">
                                                                    <span aria-hidden="true">
                                                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                                    </span>
                                                                    <span class="sr-only">Next</span></a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <div class="product-search-count-bottom">
                                                        <h5>
                                                            Showing Products
                                                            {{$products->currentPage()}}-{{$products->lastPage()}} of
                                                            {{$products->total()}} Result
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->

    <x-slot name="scripts">
        <script>

        </script>
    </x-slot>
</x-store.layout>
