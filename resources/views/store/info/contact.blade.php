<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Contact </title>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{trans('store.contact_us_crumb_title')}}</h2></div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('store.index')}}">{{trans('store.home_crumb_title')}}</a></li>
                            <li class="breadcrumb-item active">{{trans('store.contact_us_crumb_title')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="contact-page section-b-space">
        <div class="container">
            <div class="row section-b-space">
                <div class="col-lg-7 map">
                    <iframe src="{{$contact->location}}"  allowfullscreen></iframe>
                </div>
                <div class="col-lg-5">
                    <div class="contact-right">
                        <ul>
                            <li>
                                <div class="contact-icon"><img src="images/icon/phone.png" alt="Generic placeholder image">
                                    <h6>{{trans('store.contact_us_call_us')}}</h6></div>
                                <div class="media-body">
                                    <p>{{$contact->phone}}</p>

                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h6>{{trans('store.contact_us_address')}}</h6></div>
                                <div class="media-body">
                                    <p>{{$contact->{'contact_'.app()->getLocale()}->address}}</p>

                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><img src="images/icon/email.png" alt="Generic placeholder image">
                                    <h6>{{trans('store.contact_us_email')}}</h6></div>
                                <div class="media-body">
                                    <p>{{$contact->email}}</p>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form action="{{route('store.contact.post')}}" method="post" class="theme-form">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">{{trans('store.form_fullname')}}</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="{{trans('store.form_fullname_holder')}}"
                                    placeholder="Enter Your name"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">{{trans('store.form_phone')}}</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="{{trans('store.form_phone_holder')}}"
                                    id="review"
                                    placeholder="Enter your number"
                                    required="">
                            </div>
                            <div class="col-md-12">
                                <label for="email">{{trans('store.form_email')}}</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="email"
                                    id="email"
                                    placeholder="{{trans('store.form_email_holder')}}"
                                    required="">
                            </div>
                            <div class="col-md-12">
                                <label for="review">{{trans('store.form_message')}}</label>
                                <textarea
                                    class="form-control"
                                    name="message"
                                    placeholder="{{trans('store.form_message_holder')}}"
                                    id="exampleFormControlTextarea1"
                                    rows="6"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-solid" type="submit">{{trans('store.contact_page_submit_btn')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->

</x-store.layout>
