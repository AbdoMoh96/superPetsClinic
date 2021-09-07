<x-admin.dashboard.layout starter="Create Product">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Create Product </title>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" route="admin.dashboard" name="dashboard" />
        <x-admin.dashboard.items.bread-crumb-link active="0" route="admin.product.index" name="products" />
        <x-admin.dashboard.items.bread-crumb-link active="1" name="create Product" />
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
                        <h3 class="card-title"> Create Product </h3>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.product.store')}}" method="post" >
                        @csrf
                        @method("POST")
                        <div class="card-body">
                            <div id="en">

                                <div class="form-group mb-4">
                                    <label for="title" class="text-primary">Product Title</label>
                                    <input
                                        type="text"
                                        class="form-control @error("title") is-invalid @enderror"
                                        id="title"
                                        name="title"
                                        required
                                        value="{{old("title")}}"
                                        placeholder="">
                                    @error("title")
                                     <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="subtitle" class="text-primary">Product subtitle</label>
                                    <input
                                        type="text"
                                        class="form-control @error("subtitle") is-invalid @enderror"
                                        id="subtitle"
                                        name="subtitle"
                                        value="{{old("subtitle")}}"
                                        placeholder="">
                                    @error("subtitle")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                              <div class="row">

                                <div class="form-group mb-4 col-6">
                                    <label for="price" class="text-primary">Product Price</label>
                                    <input
                                        type="number"
                                        step="0.01"
                                        class="form-control @error("price") is-invalid @enderror"
                                        id="price"
                                        required
                                        name="price"
                                        value="{{old("price")}}"
                                        placeholder="">
                                    @error("price")
                                      <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4 col-6">
                                    <label for="quantity" class="text-primary">Product Quantity</label>
                                    <input
                                        type="number"
                                        class="form-control @error("quantity") is-invalid @enderror"
                                        id="quantity"
                                        required
                                        name="quantity"
                                        value="{{old("quantity")}}"
                                        placeholder="">
                                    @error("quantity")
                                     <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                              </div>

                                <div class="form-group mb-4">
                                    <label for="category" class="text-primary">Product Category</label>
                                    <select name="category" id="category" class="form-control" required>
                                        <option value=""></option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error("category")
                                     <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input"
                                            id="customSwitch3"
                                            name="top">
                                        <label class="custom-control-label" for="customSwitch3">Top Collection</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description" class="text-primary">Product Description</label>
                                    <textarea
                                        name="description"
                                        id="description"
                                        class="form-control custom-textarea @error("description") is-invalid @enderror"
                                    >
                                {{old("description")}}
                                </textarea>
                                    @error("description")
                                     <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="description" class="text-primary">Product Thumbnail</label>
                                    <input type="file" id="image" name="thumbnail" class="filepond" />
                                </div>

                                <div class="form-group">
                                    <label for="description" class="text-primary">Product Gallery</label>
                                    <input
                                        type="file"
                                        id="image"
                                        name="gallery[]"
                                        class="filepond"
                                        multiple
                                        data-max-files="2"
                                    />
                                </div>


                            </div>

                            <div id="ar" class="hide">

                                <div class="form-group mb-4" dir="rtl">
                                    <label for="title_ar" class="text-primary" style="width:100%; text-align: right;">
                                        عنوان المنتج
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error("title_ar") is-invalid @enderror"
                                        id="title_ar"
                                        name="title_ar"
                                        value="{{old("title_ar")}}"
                                        placeholder="">
                                    @error("title_ar")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-4" dir="rtl">
                                    <label for="subtitle_ar" class="text-primary" style="width:100%; text-align: right;">
                                        عنوان اخر للمنتج
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control @error("subtitle_ar") is-invalid @enderror"
                                        id="subtitle_ar"
                                        name="subtitle_ar"
                                        value="{{old("subtitle_ar")}}"
                                        placeholder="">
                                    @error("subtitle_ar")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group" dir="rtl">
                                    <label for="description_ar" class="text-primary" style="width:100%; text-align: right;">
                                        وصف المنتج
                                    </label>
                                    <textarea
                                        name="description_ar"
                                        id="description_ar"
                                        class="float-left @error("description_ar") is-invalid @enderror"
                                    >
                                {{old("description_ar")}}
                                </textarea>
                                    @error("description")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer d-flex">
                            <button type="submit" class="btn btn-success">Create Product</button>
                            <a
                                href="{{route('admin.product.index')}}"
                                class="btn btn-success ml-auto"
                            > View All Products </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </x-slot>

    <x-slot name="scripts">
        <script src="{{asset('dashboard/js/views/products/create.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>
