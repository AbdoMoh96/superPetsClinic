<!DOCTYPE html>
<html lang="en">

<x-landing.partials.head>
    {{$head ?? ''}}
</x-landing.partials.head>

<body>

<div id="topbar" class="container">
    <div class="row">
        <div class="large-6 columns">

            <ul>
                <li>
                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                    <a href="#" title="Contact American Pet Clinic">
                        <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                            <span>{{$contact->{'contact_'.app()->getLocale()}->address}}</span>
                        </div>
                    </a>
                </li>
                <li class="phoneNum"><span class="fa fa-mobile"></span>
                    <span class="seo-schema phone">
                            <a itemprop="telephone" content="+2095372100" href="tel:2095372100">{{$contact->phone}}</a>
                        </span>


                </li>
            </ul>
        </div>
        <div class="large-6 columns contact">
            <ul>
                <li><a href="{{route('store.index')}}" class="cms-button-primary">{{trans('landing.top_bar_shop')}}</a></li>
                <li><a href="#" class="cms-button-alert">{{trans('landing.top_bar_emergencies')}}</a></li>
            </ul>
        </div>
    </div>
</div>

<x-landing.containers.nav/>

{{--<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="SEARCH KEYWORD(s)" />
        <button type="submit" class="btn theme-btn"><i class="fa fa-search"></i> Search</button>
    </form>
</div>--}}


{{ $slot }}

<x-store.partials.footer/>

<a href="#content" class="back-to-top">{{trans('landing.back_to_top_btn')}}</a>


<!--modal popup start-->
<x-store.partials.popup/>

<x-landing.partials.scripts>
    {{$scripts ?? ''}}
</x-landing.partials.scripts>

</body>

</html>
