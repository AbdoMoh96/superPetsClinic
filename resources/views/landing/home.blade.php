<x-landing.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | SuperPets Clinic </title>
    </x-slot>

<div class="petcare-slider owl-carousel owl-theme">

    @foreach($homeSlider->slides as $slide)
    <div class="single-petcare-slider item-one">
        <img src="{{asset($slide->image_path)}}" alt="">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="container">
                    <div class="p-slide-item">
                        <h1>{{$slide->{'slide_'.app()->getLocale()}->title}}</h1>
                        {!! $slide->{'slide_'.app()->getLocale()}->description !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>


<section class="pc-about-section">

    <div class="pc-about-main ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-pc-about wow zoomIn">
                        <div class="pc-section-title text-start">

                            <h3>{{trans('landing.home_page_about_us')}}</h3>
                           {!! $about->{'about_'.app()->getLocale()}->about_description_text !!}
                        </div>


                        <div class="pc-ab-address media">
                            <div class="sngl-add media">
                                <i class="fa fa-location-arrow"></i>                                    <p>{{$contact->{'contact_'.app()->getLocale()}->address}}</p>
                            </div>
                            <div class="sngl-add add-2 media">
                                <i class="fa fa-phone"></i>                                                                   <p><a href="#">call us {{$contact->phone}}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-pc-about wow zoomIn">
                        <div class="img2">
                            <img src="{{asset($about->about_image)}}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<section class="pc-services-section ptb-100">
    <div class="container">
        <div class="pc-section-title">
            <h3>{{trans('landing.home_page_services')}}</h3>
        </div>
        <div class="pc-services-slider owl-carousel owl-theme">
           @foreach($services->slides as $slide)
            <div class="single-pc-service">
                <img src="{{asset($slide->image_path)}}" alt="Image">
                <div class="service-pc-text">
                    <a href="{{$slide->url}}">
                        <h4>{{$slide->{'slide_'.app()->getLocale()}->title}}</h4>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


<section class="pc-gallery-section">
    <div class="container-fluid">
        <div class="pc-section-title">
            <h3>{{trans('landing.home_page_gallery')}}</h3>
        </div>
        <div class="row">
            <div class="sngl-gallery-slider owl-carousel owl-theme popup-gallery">

                @foreach($gallery->slides as $slide)
                <div class="gallery-image">
                    <img src="{{asset($slide->image_path)}}" alt="Image">
                    <div class="pc-gallery-hover">
                        <div class="d-table">
                            <div class="d-tablecell">
                                <a href="{{asset($slide->image_path)}}">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>



<section class="pc-contact-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow zoomIn">
                <div class="single-contact">
                    <img src="{{asset('landing/img/contact/cat_dog_img.jpg')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-contact wow fadeInUp" data-wow-delay=".2s">
                    <div class="contact-form">
                        <div class="con-head">
                            <h3>{{trans('landing.home_page_appointment')}}</h3>
                        </div>
                        <form action="{{route('store.appointment.post')}}" method="post" id="appointment-form" class="form-inline">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6  col-md-6">
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            name="fullname"
                                            id="name"
                                            class="form-control"
                                            required data-error="Please Enter your name"
                                            placeholder="{{trans('landing.form_fullname')}}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text"
                                               name="phone"
                                               id="phone_number"
                                               required
                                               data-error="Please Enter your number"
                                               class="form-control"
                                               placeholder="{{trans('landing.form_phone')}}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12  col-md-12">
                                    <div class="form-group">
                                        <input type="email"
                                               name="email"
                                               id="email"
                                               class="form-control"
                                               required
                                               data-error="Please Enter your email"
                                               placeholder="{{trans('landing.form_email')}}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
{{--                                <div class="col-lg-6 col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" name="subject" id="text" required data-error="Subject" class="form-control" placeholder="Subject">--}}
{{--                                        <div class="help-block with-errors"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message"
                                                  class="form-control"
                                                  id="message" cols="30" rows="6"
                                                  required data-error="Write your message"
                                                  placeholder="{{trans('landing.form_message')}}"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button
                                        class="btn btn-primary"
                                        onclick="document.getElementById('appointment-form').submit()"
                                    >{{trans('landing.appointment_page_submit_btn')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <x-slot name="scripts">
        <script>
            $(window).on('load', function() {
                $('#exampleModal').modal('show');
            });

            function openSearch() {
                document.getElementById("search-overlay").style.display = "block";
            }

            function closeSearch() {
                document.getElementById("search-overlay").style.display = "none";
            }
        </script>
    </x-slot>

</x-landing.layout>
