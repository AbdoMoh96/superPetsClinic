<div class="main-menu-area-two">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

            <a class="navbar-brand" href="{{route('clinic.index')}}">
                <img src="{{asset($setting->h_logo)}}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class=" main-menu-two ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown active">
                            <a href="#home" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">
                                {{trans('landing.nav_home')}}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">
                                {{trans('landing.nav_about')}}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#service">
                                {{trans('landing.nav_services')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">
                                {{trans('landing.nav_gallery')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#appointment">
                                {{trans('landing.nav_appointments')}}
                            </a>
                        </li>
                        {{--<li class="nav-item">
                            <a class="nav-link" href="#contact">
                                {{trans('landing.nav_contact')}}
                            </a>
                        </li>--}}
                        @if(app()->getLocale() === 'ar')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("store.lang" , "en")}}">
                                English
                            </a>
                        </li>
                        @else
                         <li class="nav-item">
                            <a class="nav-link" href="{{route("store.lang" , "ar")}}">
                                عربي
                            </a>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
