<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Forgot Password </title>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>customer's Forgot Password</h2></div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('store.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Forgot Password</li>
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
                    <h3>Forgot Password</h3>
                    <div class="theme-card">
                        <form  class="theme-form" action="{{route("store.forget.password.post")}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                @error('email') <p style="color:red;">{{$message}}</p> @enderror
                                @if(session()->has('status')) <p style="color:forestgreen;">{{ session()->get('status') }}</p> @endif
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="">
                            </div>

                            <button type="submit" class="btn btn-solid">send password reset link</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Section ends-->
</x-store.layout>
