<x-admin.dashboard.layout starter="Edit Slide">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Edit Slide </title>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" route="admin.dashboard" name="dashboard" />
{{--        <x-admin.dashboard.items.bread-crumb-link active="0" route="admin.slider.index" name="sliders" />--}}
        <x-admin.dashboard.items.bread-crumb-link active="1" name="update slide" />
    </x-slot>

    <x-slot name="alerts">
        @if($errors->all())
            <x-admin.dashboard.items.alert state="danger" message="Errors in Arabic or English"/>
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
                        <h3 class="card-title"> update Slide </h3>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.slider.slides.update')}}" method="post" >
                        @csrf
                        @method("POST")
                        <div class="card-body">
                            <div id="en">

                                <input type="hidden" name="id" value="{{$slide->id}}"/>
                                <input type="hidden" name="slider_id" value="{{$slide->slider_id}}"/>
                                <input type="hidden" name="slug" value="{{$slide->slider->slug}}"/>

                                <div class="form-group mb-4">
                                    <label for="title" class="text-primary">Slide Title</label>
                                    <input
                                        type="text"
                                        class="form-control @error("title") is-invalid @enderror"
                                        id="title"
                                        name="title"
                                        value="{{$slide->slide_en->title}}"
                                        placeholder="">
                                    @error("title")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="subtitle" class="text-primary">Slide subtitle</label>
                                    <input
                                        type="text"
                                        class="form-control @error("subtitle") is-invalid @enderror"
                                        id="subtitle"
                                        name="subtitle"
                                        value="{{$slide->slide_en->subtitle}}"
                                        placeholder="">
                                    @error("subtitle")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="btn_text" class="text-primary">Slide button text</label>
                                    <input
                                        type="text"
                                        class="form-control @error("btn_text") is-invalid @enderror"
                                        id="btn_text"
                                        name="btn_text"
                                        value="{{$slide->slide_en->btn_text}}"
                                        placeholder="">
                                    @error("btn_text")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="url" class="text-primary">Slide Url</label>
                                    <input
                                        type="text"
                                        class="form-control @error("url") is-invalid @enderror"
                                        id="url"
                                        name="url"
                                        value="{{$slide->url}}"
                                        placeholder="">
                                    @error("url")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description" class="text-primary">Slide Description</label>
                                    <textarea
                                        name="description"
                                        id="description"
                                        class="form-control custom-textarea @error("description") is-invalid @enderror"
                                    >
                                {{$slide->slide_en->description}}
                                </textarea>
                                    @error("description")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <input type="file" id="image" name="image" class="filepond" />
                                </div>

                            </div>

                            <div id="ar" class="hide">

                                <div class="form-group mb-4" dir="rtl">
                                    <label for="title_ar" class="text-primary" style="width:100%; text-align: right;">
                                        عنوان الصورة
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error("title_ar") is-invalid @enderror"
                                        id="title_ar"
                                        name="title_ar"
                                        value="{{$slide->slide_ar->title}}"
                                        placeholder="">
                                    @error("title_ar")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4" dir="rtl">
                                    <label for="subtitle_ar" class="text-primary" style="width:100%; text-align: right;">
                                        عنوان اخر للصورة
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error("subtitle_ar") is-invalid @enderror"
                                        id="subtitle_ar"
                                        name="subtitle_ar"
                                        value="{{$slide->slide_ar->subtitle}}"
                                        placeholder="">
                                    @error("subtitle_ar")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4" dir="rtl">
                                    <label for="btn_text_ar" class="text-primary" style="width:100%; text-align: right;">
                                        عنوان الزر
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error("btn_text_ar") is-invalid @enderror"
                                        id="btn_text_ar"
                                        name="btn_text_ar"
                                        value="{{$slide->slide_ar->btn_text}}"
                                        placeholder="">
                                    @error("btn_text_ar")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group" dir="rtl">
                                    <label for="description_ar" class="text-primary" style="width:100%; text-align: right;">
                                        وصف الصورة
                                    </label>
                                    <textarea
                                        name="description_ar"
                                        id="description_ar"
                                        class="float-left @error("description_ar") is-invalid @enderror"
                                    >
                                {{$slide->slide_ar->description}}
                                </textarea>
                                    @error("description")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer d-flex">
                            <button type="submit" class="btn btn-success">Update Slide</button>
                            <a
                                href="{{route('admin.slider.slides.index' , $slide->slider->slug )}}"
                                class="btn btn-success ml-auto"
                            > View All Slides </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </x-slot>

    <x-slot name="scripts">
        <script src="{{asset('dashboard/js/views/sliders/editSlide.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>
