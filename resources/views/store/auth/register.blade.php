<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Register </title>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{trans('store.register_crumb_title')}}</h2></div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('store.index')}}">{{trans('store.home_crumb_title')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{trans('store.register_crumb_title')}}</li>
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
                    <h3>{{trans('store.register_crumb_title')}}</h3>
                    <div class="theme-card">
                        <form class="theme-form" action="{{route('store.register.post')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="first_name">{{trans('store.form_firstname')}}</label>
                                    @error('first_name') <p style="color:red;">{{$message}}</p> @enderror
                                    <input
                                           type="text"
                                           name="first_name"
                                           value="{{old('first_name')}}"
                                           class="form-control"
                                           id="first_name"
                                           placeholder="{{trans('store.form_firstname_holder')}}"
                                           required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name">{{trans('store.form_lastname')}}</label>
                                    @error('last_name') <p style="color:red;">{{$message}}</p> @enderror
                                    <input
                                        type="text"
                                        name="last_name"
                                        value="{{old('last_name')}}"
                                        class="form-control"
                                        id="last_name"
                                        placeholder="{{trans('store.form_lastname_holder')}}"
                                        required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="email">{{trans('store.form_email')}}</label>
                                    @error('email') <p style="color:red;">{{$message}}</p> @enderror
                                    <input
                                        type="text"
                                        name="email"
                                        value="{{old('email')}}"
                                        class="form-control"
                                        id="email"
                                        placeholder="{{trans('store.form_email_holder')}}"
                                        required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="password">{{trans('store.form_password')}}</label>
                                    @error('password') <p style="color:red;">{{$message}}</p> @enderror
                                    <input type="password"
                                           name="password"
                                           class="form-control"
                                           id="password"
                                           placeholder="{{trans('store.form_password_holder')}}" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <label for="password_confirmation">{{trans('store.form_confirm_password')}}</label>
                                    @error('password_confirmation') <p style="color:red;">{{$message}}</p> @enderror
                                    <input type="password"
                                           name="password_confirmation"
                                           class="form-control"
                                           id="password_confirmation"
                                           placeholder="{{trans('store.form_confirm_password_holder')}}" required="">
                                </div>

                                <div class="col-md-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-solid">{{trans('store.register_btn')}}</button>
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
