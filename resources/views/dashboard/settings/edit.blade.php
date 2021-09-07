<x-admin.dashboard.layout starter="Update Settings">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Update Settings </title>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" route="admin.dashboard" name="dashboard" />
        <x-admin.dashboard.items.bread-crumb-link active="1" name="update settings" />
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
                        <h3 class="card-title"> Update Settings </h3>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.settings.update')}}" method="post" >
                        @csrf
                        @method("POST")
                        <div class="card-body">
                            <div id="en">
                                <div class="form-group mb-4">
                                    <label for="name" class="text-primary">Website Name</label>
                                    <input
                                        type="text"
                                        class="form-control @error("name") is-invalid @enderror"
                                        id="name"
                                        name="name"
                                        value="{{$setting->settings_en->name}}"
                                        placeholder="">
                                    @error("name")
                                     <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>



                                <div class="form-group mb-4">
                                    <label for="description" class="text-primary">Website Description</label>
                                    <textarea
                                        name="description"
                                        id="description"
                                        class="form-control custom-textarea @error("description") is-invalid @enderror"
                                    >
                                {{$setting->settings_en->description}}
                                </textarea>
                                    @error("description")
                                     <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>



                                <div class="form-group mb-4">
                                    <label for="description" class="text-primary">Website Default Language</label>
                                    <div class="custom-control custom-radio">
                                        <input
                                            class="custom-control-input"
                                            type="radio" id="customRadio2"
                                            value="en"
                                            @if($setting->lang === 'en') checked @endif
                                            name="lang" >
                                        <label for="customRadio2" class="custom-control-label">English</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input
                                            class="custom-control-input"
                                            type="radio" id="customRadio1"
                                            value="ar"
                                            @if($setting->lang === 'ar') checked @endif
                                            name="lang">
                                        <label for="customRadio1" class="custom-control-label">Arabic</label>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input"
                                            id="customSwitch3"
                                            name="active"
                                            @if($setting->active === 1) checked @endif>
                                        <label class="custom-control-label" for="customSwitch3">Website Status</label>
                                    </div>
                                </div>


                                <div class="form-group mb-4">
                                    <label for="admin_logo" class="text-primary">Dashboard Logo</label>
                                    <input type="file"
                                           id="admin_logo"
                                           name="admin_logo"
                                           class="filepond"
                                    />
                                </div>

                                <div class="form-group mb-4">
                                    <label for="h_logo" class="text-primary">Website Header Logo</label>
                                    <input type="file"
                                           id="h_logo"
                                           name="h_logo"
                                           class="filepond"
                                    />
                                </div>

                                <div class="form-group mb-4">
                                    <label for="f_logo" class="text-primary">Website Footer Logo</label>
                                    <input type="file"
                                           id="f_logo"
                                           name="f_logo"
                                           class="filepond"
                                    />
                                </div>

                                <div class="form-group mb-4">
                                    <label for="store_logo" class="text-primary">popup Store Logo</label>
                                    <input type="file"
                                           id="store_logo"
                                           name="store_logo"
                                           class="filepond"
                                    />
                                </div>

                                <div class="form-group mb-4">
                                    <label for="clinic_logo" class="text-primary">popup Clinic Logo</label>
                                    <input type="file"
                                           id="clinic_logo"
                                           name="clinic_logo"
                                           class="filepond"
                                    />
                                </div>


                            </div>

                            <div id="ar" class="hide">

                                <div class="form-group mb-4" dir="rtl">
                                    <label for="name_ar" class="text-primary" style="width:100%; text-align: right;">
                                        اسم الموقع
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error("name_ar") is-invalid @enderror"
                                        id="name_ar"
                                        name="name_ar"
                                        value="{{$setting->settings_ar->name}}"
                                        placeholder="">
                                    @error("name_ar")
                                     <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="form-group" dir="rtl">
                                    <label for="description_ar" class="text-primary" style="width:100%; text-align: right;">
                                        وصف الموقع
                                    </label>
                                    <textarea
                                        name="description_ar"
                                        id="description_ar"
                                        class="float-left @error("description_ar") is-invalid @enderror"
                                    >
                                {{$setting->settings_ar->description}}
                                </textarea>
                                    @error("description")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer d-flex">
                            <button type="submit" class="btn btn-success">Update Settings</button>
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
        <script src="{{asset('dashboard/js/views/settings/edit.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>
