<x-admin.dashboard.layout starter="Update Category">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Update Category </title>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" route="admin.dashboard" name="dashboard" />
        <x-admin.dashboard.items.bread-crumb-link active="1" name="Update category" />
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
                        <h3 class="card-title"> update category </h3>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.category.update')}}" method="post" >
                        @csrf
                        @method("POST")
                        <div class="card-body">
                            <div id="en">
                                <div class="form-group mb-4">
                                    <label for="name" class="text-primary">Category Name</label>
                                    <input
                                        type="text"
                                        class="form-control @error("name") is-invalid @enderror"
                                        id="name"
                                        name="name"
                                        value="{{$category->getTranslation('name', 'en')}}"
                                        placeholder="">
                                    @error("name")
                                     <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="name" class="text-primary">Category Image</label>
                                    <input type="file"
                                           id="image"
                                           name="image"
                                           class="filepond"
                                    />
                                </div>

                                <input type="hidden" name="id" value="{{$category->id}}">

                            </div>

                            <div id="ar" class="hide">

                                <div class="form-group mb-4" dir="rtl">
                                    <label for="name_ar" class="text-primary" style="width:100%; text-align: right;">
                                        اسم التصنيف
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error("name_ar") is-invalid @enderror"
                                        id="name_ar"
                                        name="name_ar"
                                        value="{{$category->getTranslation('name', 'ar')}}"
                                        placeholder="">
                                    @error("name_ar")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer d-flex">
                            <button type="submit" class="btn btn-success">Update Category</button>
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
        <script src="{{asset('dashboard/js/views/category/edit.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>
