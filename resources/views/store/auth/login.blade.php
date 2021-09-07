<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Login </title>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{trans('store.login_crumb_title')}}</h2></div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('store.index')}}">{{trans('store.home_crumb_title')}}</a></li>
                            <li class="breadcrumb-item active">{{trans('store.login_crumb_sm_title')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>{{trans('store.login_crumb_sm_title')}}</h3>
                    <div class="theme-card">
                        <form  class="theme-form" action="{{route("store.login")}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="email">{{trans('store.form_email')}}</label>
                                @error('email') <p style="color:red;">{{$message}}</p> @enderror
                                @if(session()->has('message')) <p style="color:forestgreen;">{{session()->get('message')}}</p> @endif
                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="{{trans('store.form_email_holder')}}" required="">

                            </div>
                            <div class="form-group">
                                <label for="review">{{trans('store.form_password')}}</label>
                                @error('password') <p style="color:red;">{{$message}}</p> @enderror
                                <input
                                    type="password"
                                    class="form-control"
                                    id="review"
                                    name="password"
                                    placeholder="{{trans('store.form_password_holder')}}" required="">
                            </div>

                            <div class="form-group">

                                <input type="checkbox" name="remember" id="remember">
                                <label  for="remember">
                                    {{trans('store.from_remember')}}
                                </label>
                            </div>

                            <div class="form-group">
                                <a href="{{route('store.forget.password.get')}}" >{{trans('store.form_forgot_password')}}</a>
                            </div>
                            <button type="submit" class="btn btn-solid">{{trans('store.login_btn')}}</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>{{trans('store.login_page_new_customer')}}</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">{{trans('store.login_page_create_account')}}</h6>
                        <p>{{trans('store.login_page_info')}}</p>
                        <a href="{{route('store.register.get')}}" class="btn btn-solid"> {{trans('store.create_account_btn')}} </a></div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
</x-store.layout>
