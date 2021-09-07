<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Profile </title>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{trans('store.profile_crumb_title')}}</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('store.index')}}">{{trans('store.home_crumb_title')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{trans('store.profile_crumb_title')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- personal deatail section start -->
    <section class="contact-page register-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>{{trans('store.profile_personal_details')}}</h3>
                    <form action="{{route('store.auth.update')}}" method="post" class="theme-form">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">{{trans('store.form_firstname')}}</label>
                                <input type="text"
                                       class="form-control"
                                       name="first_name"
                                       value="{{$user->first_name}}"
                                       id="name"
                                       placeholder="{{trans('store.form_firstname_holder')}}"
                                       required="">
                            </div>
                            <div class="col-md-6">
                                <label for="name">{{trans('store.form_lastname')}}</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="last_name"
                                    value="{{$user->last_name}}"
                                    id="name"
                                    placeholder="{{trans('store.form_lastname_holder')}}"
                                    required="">
                            </div>
{{--                            <div class="col-md-12">--}}
{{--                                <label for="review">Phone number</label>--}}
{{--                                <input type="text" class="form-control" id="review" placeholder="Enter your number" required="">--}}
{{--                            </div>--}}
                            <div class="col-md-12">
                                <label for="email">{{trans('store.form_email')}}</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="email"
                                    value="{{$user->email}}"
                                    id="email"
                                    placeholder="{{trans('store.form_email')}}"
                                    disabled
                                    required="">
                            </div>

                            <div class="col-md-12 mb-5">
                                <button class="btn btn-sm btn-solid" type="submit">{{trans('store.profile_save_btn')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- address section start -->
    <section class="contact-page register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>{{trans('store.profile_address_title')}}</h3>
                    <form action="{{route('store.auth.create.address')}}" method="post" class="theme-form">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 mb-5">
                                <label for="city">{{trans('store.form_city')}}</label>
                                @error('city') <p style="color:red;">{{$message}}</p> @enderror
                                <select name="city"  id="city" class="form-control" required>
                                    <option value="cairo">cairo</option>
                                    <option value="giza" >giza</option>
                                </select>
                            </div>

                            <div class="col-md-12 ">
                                <label for="street">{{trans('store.form_street')}}</label>
                                @error('street') <p style="color:red;">{{$message}}</p> @enderror
                                <input type="text"
                                       name="street"
                                       class="form-control"
                                       id="street"
                                       value=""
                                       placeholder="{{trans('store.form_street_holder')}}" required="">
                            </div>

                            <div class="col-md-12">
                                <label for="phone">{{trans('store.form_phone')}}</label>
                                @error('phone') <p style="color:red;">{{$message}}</p> @enderror
                                <input type="text"
                                       name="phone"
                                       class="form-control"
                                       id="phone"
                                       value=""
                                       placeholder="{{trans('store.form_phone_holder')}}" required="">
                            </div>

                            <div class="col-md-6">
                                <label for="block">{{trans('store.form_block')}}</label>
                                @error('block') <p style="color:red;">{{$message}}</p> @enderror
                                <input type="text"
                                       name="block"
                                       class="form-control"
                                       id="{{trans('store.form_block_holder')}}"
                                       value=""
                                       placeholder="Enter your bock number and information" required="">
                            </div>

                            <div class="col-md-6">
                                <label for="floor">{{trans('store.form_floor')}}</label>
                                @error('floor') <p style="color:red;">{{$message}}</p> @enderror
                                <input type="text"
                                       name="floor"
                                       class="form-control"
                                       id="floor"
                                       value=""
                                       placeholder="{{trans('store.form_floor_holder')}}" required="">
                            </div>

                            <div class="col-md-6">
                                <label for="apartment">{{trans('store.form_apartment')}}</label>
                                @error('apartment') <p style="color:red;">{{$message}}</p> @enderror
                                <input type="text"
                                       name="apartment"
                                       class="form-control"
                                       id="apartment"
                                       value=""
                                       placeholder="{{trans('store.form_apartment_holder')}}" required="">
                            </div>

                            <div class="col-md-6">
                                <label for="postal">{{trans('store.form_zip')}}</label>
                                @error('postal') <p style="color:red;">{{$message}}</p> @enderror
                                <input type="text"
                                       name="postal"
                                       class="form-control"
                                       id="postal"
                                       value=""
                                       placeholder="{{trans('store.form_zip_holder')}}" required="">
                            </div>

                            <div class="col-md-12">
                                <label for="info">{{trans('store.form_extra_info')}}</label>
                                @error('info') <p style="color:red;">{{$message}}</p> @enderror
                                <textarea
                                    class="form-control"
                                    name="info"
                                    id="info"
                                    placeholder="{{trans('store.form_extra_info_holder')}}"
                                    rows="4" required></textarea>
                            </div>

                            <div class="col-md-12 ">
                                <button class="btn btn-sm btn-solid" type="submit">{{trans('store.profile_address_btn')}}</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <x-slot name="scripts">
        <script>
            @if(session()->has('message'))
              swal({
                  icon: "info",
                  text: '{{session()->get('message')}}',
                  button:"Okay"
                });
            @endif
            @if(session()->has('success'))
            swal({
                icon: "success",
                text: '{{session()->get('success')}}',
                button:"Okay"
            });
            @endif
            @if(session()->has('danger'))
            swal({
                icon: "error",
                text: '{{session()->get('danger')}}',
                button:"Okay"
            });
            @endif
        </script>
    </x-slot>

</x-store.layout>
