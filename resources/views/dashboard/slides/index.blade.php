<x-admin.dashboard.layout starter="{{$slider->name}}">

    <x-slot name="head">
        <title> {{ config('app.name') }} | {{$slider->name}} </title>
        <style>
            .custom-icon{
                font-size:22px;
            }
        </style>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" name="dashboard" route="admin.dashboard"/>
{{--        <x-admin.dashboard.items.bread-crumb-link active="0" name="Sliders" route="admin.slider.index"/>--}}
        <x-admin.dashboard.items.bread-crumb-link active="1" name="{{$slider->name}}" />
    </x-slot>

    <x-slot name="alerts">
        @if(session()->has('success'))
            <x-admin.dashboard.items.alert state="success" message="{{session()->get('success')}}"/>
        @endif
        @if(session()->has('danger'))
            <x-admin.dashboard.items.alert state="danger" message="{{session()->get('danger')}}"/>
        @endif
    </x-slot>

    <x-slot name="mainContent">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$slider->name}}</h3>

                        <div class="card-tools">
                                                        <div class="input-group input-group-sm" style="width: 150px;">
{{--                                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">--}}

                                                                <a href="{{route('admin.slider.slides.create' , $slider->slug)}}"
                                                                   type="submit"
                                                                   class="btn btn-success">
                                                                    <i class="fas fa-plus"></i>
                                                                    Add New
                                                                </a>

                                                        </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Slide image</th>
                                <th>Slide Name</th>
                                <th>Slide Description</th>
                                <th>Creation date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($slider->slides as $slide)
                                <tr id="{{$slide->id}}">
                                    <td>{{$slide->id}}</td>
                                    <td><img src="{{asset($slide->image_path)}}" alt="slide-image" width="50px"></td>
                                    <td>{{$slide->slide_en->title}}</td>
                                    <td>{{$slide->slide_en->description}}</td>
                                    <td>{{$slide->created_at->format('d M Y')}}</td>
                                    <td>
                                        <a href="{{route('admin.slider.slides.edit' , $slide->id)}}">
                                            <i class="fa fa-edit text-primary custom-icon"></i>
                                        </a>
                                        <a style="cursor: pointer;">
                                            <i class="fa fa-trash text-primary custom-icon" onclick="remove({{$slide->id}})"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </x-slot>



    <x-slot name="scripts">
        <script src="{{asset('dashboard/js/views/sliders/index.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>
