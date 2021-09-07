<x-admin.dashboard.layout starter="Sliders">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Sliders </title>
        <style>
            .custom-icon{
                font-size:22px;
            }
        </style>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" name="dashboard" route="admin.dashboard"/>
        <x-admin.dashboard.items.bread-crumb-link active="1" name="Sliders" />
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
                        <h3 class="card-title">Responsive Hover Table</h3>

                        <div class="card-tools">
{{--                            <div class="input-group input-group-sm" style="width: 150px;">--}}
{{--                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">--}}

{{--                                <div class="input-group-append">--}}
{{--                                    <button type="submit" class="btn btn-default">--}}
{{--                                        <i class="fas fa-search"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Slider Name</th>
                                <th>Slider Description</th>
                                <th>Creation date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{$slider->id}}</td>
                                    <td>{{$slider->name}}</td>
                                    <td>{{$slider->description}} </td>
                                    <td>{{$slider->created_at->format('d M Y')}}</td>
                                    <td>
                                          <a href="{{route('admin.slider.slides.index' , $slider->slug )}}">
                                              <i class="fa fa-eye text-primary custom-icon"></i>
                                          </a>
                                          <a href="{{route('admin.slider.slides.create' , $slider->slug )}}">
                                              <i class="fa fa-plus-circle text-primary custom-icon"></i>
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
    </x-slot>

</x-admin.dashboard.layout>
