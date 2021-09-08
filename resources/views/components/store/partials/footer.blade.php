<footer class="footer-light">

    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo"><img src="{{asset($setting->f_logo)}}" alt=""></div>
                    </div>
                </div>
                <div class="col offset-xl-1">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>{{trans('store.footer_title_our_products')}}</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                @foreach($categories as $category)
                                  <li><a href="{{route('store.products.categories.get' , $category->name)}}">
                                          {{$category->getTranslation('name', app()->getLocale())}}
                                      </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>{{trans('store.footer_title_useful_links')}}</h4>
                        </div>
                        <div class="footer-contant">
                            @if(request()->routeIs('store.*'))
                                {{--                                store footer nav --}}
                            <ul>
                                <li><a href="{{route('store.index')}}">{{trans('store.footer_link_home')}}</a></li>
                                <li><a href="{{route('store.clinic')}}">{{trans('store.footer_link_our_clinic')}}</a></li>
                                <li><a href="{{route('store.products')}}">{{trans('store.footer_link_products')}}</a></li>
                                <li><a href="{{route('store.team')}}">{{trans('store.footer_link_team')}}</a></li>
                                <li><a href="{{route('store.appointment')}}">{{trans('store.footer_link_appointments')}}</a></li>
                                <li><a href="{{route('store.about')}}">{{trans('store.footer_link_about_us')}}</a></li>
                                <li><a href="{{route('store.contact')}}">{{trans('store.footer_link_contact_us')}}</a></li>
                            </ul>
                            @else
{{--                                clinic footer nav --}}
                            <ul>
                                <li><a href="#">{{trans('landing.nav_home')}}</a></li>
                                <li><a href="#">{{trans('landing.nav_about')}}</a></li>
                                <li><a href="#">{{trans('landing.nav_services')}}</a></li>
                                <li><a href="#">{{trans('landing.nav_gallery')}}</a></li>
                                <li><a href="#">{{trans('landing.nav_appointments')}}</a></li>
{{--                                <li><a href="#">{{trans('landing.nav_contact')}}</a></li>--}}
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>{{trans('store.footer_title_store_information')}}</h4>
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-list">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    {{$contact->{'contact_'.app()->getLocale()}->address }}
                                </li>
                                <li><i class="fa fa-phone"></i>Call Us: {{$contact->phone}} </li>
                                <li><i class="fa fa-envelope-o"></i>Email Us: <a href="#">{{$contact->email}}</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-social">
                <ul>
                    @if($contact->facebook)
                        <li><a href="{{$contact->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    @endif

                    @if($contact->twitter)
                        <li><a href="{{$contact->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    @endif

                    @if($contact->linkedin)
                        <li><a href="{{$contact->linkedin}}"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                    @endif

                    @if($contact->instagram)
                        <li><a href="{{$contact->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    @endif

                </ul>
            </div>
        </div>
    </section>
    <div class="light-layout">
        <div class="container">
            <section class="small-section border-section border-top-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe">
                            <div>
                                <img src="{{asset('store/images/2030.png')}}" alt="logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="form-inline subscribe-form auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                              target="_blank">
                            <div class="form-group mx-sm-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="EMAIL"
                                    id="mce-EMAIL"
                                    placeholder="{{trans('store.subscribe_section_holder')}}" required="required">
                            </div>
                            <button type="submit" class="btn btn-solid" id="mc-submit">{{trans('store.subscribe_section_btn')}}</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i> All Right Recive powered by SuperPetsClinic</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
{{--                            <li>--}}
{{--                                <a href="#"><img src="images/icon/visa.png" alt=""></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#"><img src="images/icon/mastercard.png" alt=""></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#"><img src="images/icon/paypal.png" alt=""></a>--}}
{{--                            </li>--}}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
