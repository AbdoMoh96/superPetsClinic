<div class="main-nav-center">
    <nav id="main-nav">
        <div class="toggle-nav">
            <i class="fa fa-bars sidebar-bar"></i>
        </div>
        <!-- Sample menu definition -->
        <ul id="main-menu" class="sm pixelstrap sm-horizontal">
            <li>
                <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
            </li>
            <li><a href="{{route('store.index')}}">{{trans('store.nav_home')}}</a></li>
            <li><a href="{{route('store.clinic')}}">{{trans('store.nav_our_clinic')}}</a></li>

            <li>
                <a href="{{route('store.products')}}">{{trans('store.nav_products')}}</a>
                <ul>
                    @foreach($categories as $category)
                      <li><a href="{{route('store.products.categories.get' , $category->name)}}">
                              {{$category->getTranslation('name', app()->getLocale())}}
                          </a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{route('store.team')}}">{{trans('store.nav_our_team')}}</a></li>
            <li><a href="{{route('store.appointment')}}">{{trans('store.nav_appointments')}}</a></li>
            <li><a href="{{route('store.about')}}">{{trans('store.nav_about_us')}}</a></li>
            <li><a href="{{route('store.contact')}}">{{trans('store.nav_contact_us')}}</a></li>
        </ul>
    </nav>
</div>
