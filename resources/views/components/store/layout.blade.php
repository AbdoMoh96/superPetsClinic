
<!DOCTYPE html>
@routes
<html lang="en">

 <x-store.partials.head>
     {{$head ?? ''}}
 </x-store.partials.head>

<body class="@if(app()->getLocale() === 'ar') rtl @endif">

<!-- header start -->
<header class="header-2 header-6">
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>{{$contact->email}}</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>{{trans('store.top_bar_call_us')}}: {{$contact->phone}} </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="header-dropdown">
                        @if(auth()->guard("web")->check())
                         <li class="mobile-wishlist">
{{--                             <a href="wishlist.html"><i class="fa fa-heart" aria-hidden="true"></i> wishlist</a>--}}
                         </li>
                        @endif
                        @if(!auth()->guard("web")->check())
                          <li style="padding-right: 5px;"><a href="{{route("store.login")}}">{{trans('store.top_bar_login')}}</a></li>
                          <li style="padding-left: 5px;"><a href="{{route("store.register.get")}}">{{trans('store.top_bar_register')}}</a></li>
                        @else
                        <li class="onhover-dropdown mobile-account">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            {{auth()->user()->first_name.' '.auth()->user()->last_name }}
                            <ul class="onhover-show-div">
                                <li>
                                    <a href="{{route('store.auth.edit')}}" data-lng="en">
                                        {{trans('store.top_bar_profile')}}
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="document.getElementById('logout').submit();" data-lng="es">
                                        {{trans('store.top_bar_logout')}}
                                    </a>
                                    <form style="display: none;"
                                          id="logout"
                                          action="{{route('store.logout')}}"
                                          method="post">@csrf @method('POST')
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu border-section border-top-0">
                    <div class="brand-logo layout2-logo">
                        <a href="{{route('store.index')}}"><img src="{{asset($setting->h_logo)}}" class="img-fluid blur-up lazyload" alt=""></a>
                    </div>
                    <div>
                        <form class="form_search" action="{{route('store.product.search.post')}}" method="post">
                            @csrf
                            <input id="query search-autocomplete"
                                   type="text"
                                   placeholder="{{trans('store.search_section_holder')}}"
                                   class="nav-search nav-search-field"
                                   name="title"
                                   aria-expanded="true">
                            <button type="submit" name="nav-submit-button" class="btn-search">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="menu-right pull-right">
                        <div class="icon-nav">
                            <ul>
                                <li class="onhover-div mobile-search">
                                    <div><img src="{{asset("store/images/icon/search.png")}}" onclick="openSearch()" class="img-fluid blur-up lazyload" alt="">
                                        <i class="ti-search" onclick="openSearch()"></i></div>
                                    <div id="search-overlay" class="search-overlay">
                                        <div>
                                            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                            <div class="overlay-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <form action="{{route('store.product.search.post')}}" method="post">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <input type="text"
                                                                           class="form-control"
                                                                           id="exampleInputPassword1"
                                                                           name="title"
                                                                           placeholder="{{trans('store.search_section_holder')}}">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="onhover-div mobile-setting">
                                    <div><img src="{{asset('store/images/icon/setting.png')}}" class="img-fluid blur-up lazyload" alt="">
                                        <i class="ti-settings"></i></div>
                                    <div class="show-div setting">
                                        <h6>{{trans('store.top_bar_language')}}</h6>
                                        <ul>
                                            <li><a
                                                    href="{{route("store.lang" , "en")}}"
                                                    class="
                                                    @if(app()->getLocale() === "en")
                                                     text-primary
                                                    @endif
                                                    ">English</a> </li>
                                            <li><a
                                                    href="{{route("store.lang" , "ar")}}" class="
                                                    @if(app()->getLocale() === "ar")
                                                    text-primary
                                                    @endif
                                                    ">عربي</a> </li>
                                        </ul>

                                    </div>
                                </li>
                                @if(auth()->check())
                                  <x-store.containers.cart/>
                                    @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <x-store.containers.nav/>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

 {{ $slot }}

<div class="map">
    <iframe src="{{$contact->location}}" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!-- footer -->
<x-store.partials.footer/>
<!-- footer end -->
 <x-store.partials.social/>
<!-- tap to top -->
<div class="tap-top border-white border">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top end -->

{{-- scripts here --}}
<x-store.partials.scripts>
    <x-slot name="customScripts"> {{$scripts ?? ''}} </x-slot>
</x-store.partials.scripts>
</body>
</html>
