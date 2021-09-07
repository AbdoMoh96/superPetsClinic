<x-admin.dashboard.layout starter="Products">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Products </title>
        <style>
            .custom-icon{
                font-size:22px;
            }
        </style>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" name="dashboard" route="admin.dashboard"/>
        <x-admin.dashboard.items.bread-crumb-link active="1" name="Products" />
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
                        <h3 class="card-title">products</h3>

                        <div class="card-tools">

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Creation date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr id="{{$product->id}}">
                                    <td>{{$product->code}}</td>
                                    <td><img src="{{asset($product->thumbnail)}}" alt="thumbnail" width="50px"></td>
                                    <td>{{$product->product_en->title}}</td>
                                    <td>{{$product->getCategory()}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->created_at->format('d M Y')}}</td>
                                    <td>
                                        <a href="{{route('admin.product.edit' , $product->id)}}">
                                            <i class="fa fa-edit text-primary custom-icon"></i>
                                        </a>
                                        <a style="cursor: pointer;">
                                            <i class="fa fa-trash text-primary custom-icon" onclick="remove({{$product->id}})"></i>
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
            {!! $products->links("pagination::bootstrap-4") !!}
        </div>

    </x-slot>



    <x-slot name="scripts">
        <script src="{{asset('dashboard/js/views/products/index.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>
