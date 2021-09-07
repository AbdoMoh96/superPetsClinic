<x-admin.dashboard.layout starter="Update Contact">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Update Contact </title>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" route="admin.dashboard" name="dashboard" />
        <x-admin.dashboard.items.bread-crumb-link active="1" name="update contact" />
    </x-slot>

    <x-slot name="alerts">
        @if($errors->all())
            <x-admin.dashboard.items.alert state="danger" message="Errors in Arabic or English"/>
        @endif
        @if(session()->has('success'))
            <x-admin.dashboard.items.alert state="success" message="{{session()->get('success')}}"/>
        @endif
    </x-slot>


    <x-slot name="mainContent">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card px-3 py-1">
                    <div class="d-flex flex-row justify-content-between">
                        <button id="lang_en" class="btn btn-success">English<i class="fa fa-globe"></i></button>
                        <button id="lang_ar" class="btn btn-success">Arabic<i class="fa fa-globe"></i></button>
                    </div>
                </div>

                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"> Update Contact </h3>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.contact.update')}}" method="post" >
                        @csrf
                        @method("POST")
                        <div class="card-body">
                            <div id="en">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("address") is-invalid @enderror"
                                           name="address"
                                           value="{{$contact->contact_en->address}}"
                                           placeholder="address">
                                </div>
                                @error("address")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("address_alt") is-invalid @enderror"
                                           name="address_alt"
                                           value="{{$contact->contact_en->address_alt}}"
                                           placeholder="another address">
                                </div>
                                @error("address_alt")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("email") is-invalid @enderror"
                                           name="email"
                                           value="{{$contact->email}}"
                                           placeholder="email">
                                </div>
                                @error("email")
                                  <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("email_alt") is-invalid @enderror"
                                           name="email_alt"
                                           value="{{$contact->email_alt}}"
                                           placeholder="another email">
                                </div>
                                @error("email_alt")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("phone") is-invalid @enderror"
                                           name="phone"
                                           value="{{$contact->phone}}"
                                           placeholder="phone">
                                </div>
                                @error("phone")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("phone_alt") is-invalid @enderror"
                                           name="phone_alt"
                                           value="{{$contact->phone_alt}}"
                                           placeholder="second phone">
                                </div>
                                @error("phone_alt")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("location") is-invalid @enderror"
                                           name="location"
                                           value="{{$contact->location}}"
                                           placeholder="map location">
                                </div>
                                @error("location")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("facebook") is-invalid @enderror"
                                           name="facebook"
                                           value="{{$contact->facebook}}"
                                           placeholder="facebook">
                                </div>
                                @error("facebook")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-facebook-messenger"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("messenger") is-invalid @enderror"
                                           name="messenger"
                                           value="{{$contact->messenger}}"
                                           placeholder="Facebook Messenger">
                                </div>
                                @error("messenger")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("twitter") is-invalid @enderror"
                                           name="twitter"
                                           value="{{$contact->twitter}}"
                                           placeholder="twitter">
                                </div>
                                @error("twitter")
                                <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("instagram") is-invalid @enderror"
                                           name="instagram"
                                           value="{{$contact->instagram}}"
                                           placeholder="instagram">
                                </div>
                                @error("instagram")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("youtube") is-invalid @enderror"
                                           name="youtube"
                                           value="{{$contact->youtube}}"
                                           placeholder="youtube">
                                </div>
                                @error("youtube")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("linkedin") is-invalid @enderror"
                                           name="linkedin"
                                           value="{{$contact->linkedin}}"
                                           placeholder="linkedin">
                                </div>
                                @error("linkedin")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-snapchat"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("snapchat") is-invalid @enderror"
                                           name="snapchat"
                                           value="{{$contact->snapchat}}"
                                           placeholder="snapchat">
                                </div>
                                @error("snapchat")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("whatsapp") is-invalid @enderror"
                                           name="whatsapp"
                                           value="{{$contact->whatsapp}}"
                                           placeholder="whatsapp">
                                </div>
                                @error("whatsapp")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-google-plus"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("google_plus") is-invalid @enderror"
                                           name="google_plus"
                                           value="{{$contact->google_plus}}"
                                           placeholder="google-plus">
                                </div>
                                @error("google_plus")
                                <p class="text-danger">{{$message}}</p>
                                @enderror


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-pinterest"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("pinterest") is-invalid @enderror"
                                           name="pinterest"
                                           value="{{$contact->pinterest}}"
                                           placeholder="pinterest">
                                </div>
                                @error("pinterest")
                                <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-behance"></i></span>
                                    </div>
                                    <input type="text"
                                           class="form-control @error("behance") is-invalid @enderror"
                                           name="behance"
                                           value="{{$contact->behance}}"
                                           placeholder="behance">
                                </div>
                                @error("behance")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror


                            </div>

                            <div id="ar" class="hide">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                    </div>
                                    <input type="text"
                                           dir="rtl"
                                           class="form-control @error("address_ar") is-invalid @enderror"
                                           name="address_ar"
                                           value="{{$contact->contact_ar->address}}"
                                           placeholder="عنوان">
                                </div>
                                @error("address_ar")
                                 <p class="text-danger">{{$message}}</p>
                                @enderror

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                    </div>
                                    <input type="text"
                                           dir="rtl"
                                           class="form-control @error("address_alt_ar") is-invalid @enderror"
                                           name="address_alt_ar"
                                           value="{{$contact->contact_ar->address_alt}}"
                                           placeholder="عنوان اخر">
                                </div>
                                @error("address_alt_ar")
                                <p class="text-danger">{{$message}}</p>
                                @enderror

                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer d-flex">
                            <button type="submit" class="btn btn-success">Update Contact</button>
                            <a
                                href="{{route('admin.dashboard')}}"
                                class="btn btn-success ml-auto"
                            > Back To Dashboard </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </x-slot>

    <x-slot name="scripts">
        <script src="{{asset('dashboard/js/views/contact/edit.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>
