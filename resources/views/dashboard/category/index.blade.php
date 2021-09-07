<x-admin.dashboard.layout starter="Categories">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Categories </title>
        <style>
            .custom-icon{
                font-size:22px;
            }
        </style>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" name="dashboard" route="admin.dashboard"/>
        <x-admin.dashboard.items.bread-crumb-link active="1" name="categories" />
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

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">categories</h3>

                        <div class="card-tools">

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Creation date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr id="{{$category->id}}">
                                    <td>{{$category->id}}</td>
                                    <td><img src="{{asset($category->image)}}" width="50px" alt="category->image"></td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->created_at->format('d M Y')}}</td>
                                    <td>
                                        <a href="{{route('admin.category.edit' , $category->id)}}">
                                            <i class="fa fa-edit text-primary custom-icon"></i>
                                        </a>
                                        <a style="cursor: pointer;">
                                            <i class="fa fa-trash text-primary custom-icon"
                                               onclick="remove('{{$category->id}}')"></i>
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
        <script src="{{asset('dashboard/js/views/category/index.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>
