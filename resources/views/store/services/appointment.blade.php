<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Appointment </title>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{trans('store.appointment_crumb_title')}}</h2></div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('store.index')}}">{{trans('store.home_crumb_title')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{trans('store.appointment_crumb_title')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>{{trans('store.appointment_crumb_title')}}</h3>
                    <div class="theme-card">
                        <form id="appointment-form" action="{{route('store.appointment.post')}}" method="post" class="theme-form">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="email">{{trans('store.form_fullname')}}</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="fullname"
                                        id="fname"
                                        placeholder="{{trans('store.form_fullname_holder')}}"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="review">{{trans('store.form_phone')}}</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="phone"
                                        id="lname"
                                        placeholder="{{trans('store.form_phone_holder')}}"
                                        required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="email">{{trans('store.form_email')}}</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        placeholder="{{trans('store.form_email_holder')}}"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <label for="review">{{trans('store.form_message')}}</label>
                                    <textarea
                                        class="form-control mb-0"
                                        name="message"
                                        placeholder="{{trans('store.form_message_holder')}}"
                                        id="exampleFormControlTextarea1"
                                        required
                                        rows="6"></textarea>

                                </div>
{{--                                <a href="#"--}}
{{--                                   class="btn btn-solid"--}}
{{--                                   onclick="document.getElementById('appointment-form').submit()">--}}
{{--                                    Reserve Appointment--}}
{{--                                </a>--}}

                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="btn btn-solid">{{trans('store.appointment_page_submit_btn')}}</button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->

</x-store.layout>
