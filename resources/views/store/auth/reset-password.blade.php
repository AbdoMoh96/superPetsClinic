<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Password Reset </title>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>customer's Password Reset</h2></div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('store.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Reset Password</li>
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
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h3>Reset Password</h3>
                    <div class="theme-card">
                        <form  class="theme-form" action="{{route("store.reset.password.post")}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="password">password</label>
                                @error('password') <p style="color:red;">{{$message}}</p> @enderror
                                @if(session()->has('error')) <p style="color:red;">{{session()->get('error')}}</p> @endif
                                <input type="password"
                                       class="form-control"
                                       id="password"
                                       name="password"
                                       placeholder="password"
                                       required="">
                            </div>

                            <div class="form-group">
                                <label for="password">confirm password</label>
                                @error('password_confirmation') <p style="color:red;">{{$message}}</p> @enderror
                                <input type="password"
                                       class="form-control"
                                       id="password"
                                       name="password_confirmation"
                                       placeholder="confirm password" required="">
                            </div>

                            <input type="hidden" name="token" value="{{$token}}"/>
                            <input type="hidden" name="email" value="{{$email}}"/>

                            <button type="submit" class="btn btn-solid">reset password</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Section ends-->

</x-store.layout>
