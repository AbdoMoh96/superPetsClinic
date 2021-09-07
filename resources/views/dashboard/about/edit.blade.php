<x-admin.dashboard.layout starter="Update About">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Update About </title>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" route="admin.dashboard" name="dashboard" />
        <x-admin.dashboard.items.bread-crumb-link active="1" name="update about" />
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
                        <h3 class="card-title"> Update About </h3>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.about.update')}}" method="post" >
                        @csrf
                        @method("POST")
                        <div class="card-body">
                            <div id="en">
                                <div class="form-group mb-4">
                                    <label for="title" class="text-primary">Clinic Title</label>
                                    <input
                                        type="text"
                                        class="form-control @error("title") is-invalid @enderror"
                                        id="title"
                                        name="title"
                                        value="{{$about->about_en->title}}"
                                        placeholder="">
                                    @error("title")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="subtitle" class="text-primary">Clinic Subtitle</label>
                                    <input
                                        type="text"
                                        class="form-control @error("subtitle") is-invalid @enderror"
                                        id="subtitle"
                                        name="subtitle"
                                        value="{{$about->about_en->subtitle}}"
                                        placeholder="">
                                    @error("subtitle")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description" class="text-primary">Clinic Description</label>
                                    <textarea
                                        name="description"
                                        id="description"
                                        class="form-control custom-textarea @error("description") is-invalid @enderror"
                                    >
                                {{$about->about_en->description_text}}
                                </textarea>
                                    @error("description")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="form-group mb-4">
                                    <label for="about_title" class="text-primary">About Title</label>
                                    <input
                                        type="text"
                                        class="form-control @error("about_title") is-invalid @enderror"
                                        id="about_title"
                                        name="about_title"
                                        value="{{$about->about_en->about_title}}"
                                        placeholder="">
                                    @error("about_title")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="about_subtitle" class="text-primary">About Subtitle</label>
                                    <input
                                        type="text"
                                        class="form-control @error("about_subtitle") is-invalid @enderror"
                                        id="about_subtitle"
                                        name="about_subtitle"
                                        value="{{$about->about_en->about_subtitle}}"
                                        placeholder="">
                                    @error("about_subtitle")
                                     <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="about_description" class="text-primary">About Description</label>
                                    <textarea
                                        name="about_description"
                                        id="about_description"
                                        class="form-control custom-textarea @error("about_description") is-invalid @enderror"
                                    >
                                {{$about->about_en->about_description_text}}
                                </textarea>
                                    @error("about_description")
                                     <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="about_description" class="text-primary">Clinic Image</label>
                                    <input type="file"
                                           id="image"
                                           name="description_image"
                                           class="filepond"
                                    />
                                </div>

                                <div class="form-group">
                                    <label for="about_description" class="text-primary">About Image</label>
                                    <input type="file"
                                           id="image"
                                           name="about_image"
                                           class="filepond"
                                    />
                                </div>


                            </div>

                            <div id="ar" class="hide">

                                <div class="form-group mb-4" dir="rtl">
                                    <label for="title_ar" class="text-primary" style="width:100%; text-align: right;">
                                        عنوان العيادة
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error("title_ar") is-invalid @enderror"
                                        id="title_ar"
                                        name="title_ar"
                                        value="{{$about->about_ar->title}}"
                                        placeholder="">
                                    @error("title_ar")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4" dir="rtl">
                                    <label for="subtitle_ar" class="text-primary" style="width:100%; text-align: right;">
                                        عنوان آخر للعيادة
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error("subtitle_ar") is-invalid @enderror"
                                        id="subtitle_ar"
                                        name="subtitle_ar"
                                        value="{{$about->about_ar->subtitle}}"
                                        placeholder="">
                                    @error("subtitle_ar")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="form-group" dir="rtl">
                                    <label for="description_ar" class="text-primary" style="width:100%; text-align: right;">
                                        وصف العيادة
                                    </label>
                                    <textarea
                                        name="description_ar"
                                        id="description_ar"
                                        class="float-left @error("description_ar") is-invalid @enderror"
                                    >
                                {{$about->about_ar->description_text}}
                                </textarea>
                                    @error("description")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="form-group mb-4" dir="rtl">
                                    <label for="about_title_ar" class="text-primary" style="width:100%; text-align: right;">
                                        عنوان من نحن
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error("about_title_ar") is-invalid @enderror"
                                        id="about_title_ar"
                                        name="about_title_ar"
                                        value="{{$about->about_ar->about_title}}"
                                        placeholder="">
                                    @error("about_title_ar")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4" dir="rtl">
                                    <label for="about_subtitle_ar" class="text-primary" style="width:100%; text-align: right;">
                                        عنوان آخر لمن نحن
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error("about_subtitle_ar") is-invalid @enderror"
                                        id="about_subtitle_ar"
                                        name="about_subtitle_ar"
                                        value="{{$about->about_ar->about_subtitle}}"
                                        placeholder="">
                                    @error("about_subtitle_ar")
                                      <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="form-group" dir="rtl">
                                    <label for="about_description_ar" class="text-primary" style="width:100%; text-align: right;">
                                        وصف من نحن
                                    </label>
                                    <textarea
                                        name="about_description_ar"
                                        id="about_description_ar"
                                        class="float-left @error("about_description_ar") is-invalid @enderror"
                                    >
                                {{$about->about_ar->about_description_text}}
                                </textarea>
                                    @error("about_description_ar")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer d-flex">
                            <button type="submit" class="btn btn-success">Update About</button>
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
        <script src="{{asset('dashboard/js/views/about/editAbout.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>
