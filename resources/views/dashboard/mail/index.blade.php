<x-admin.dashboard.layout starter="Emails">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Emails </title>
        <style>
            .custom-icon{
                font-size:22px;
            }
        </style>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" name="dashboard" route="admin.dashboard"/>
        <x-admin.dashboard.items.bread-crumb-link active="1" name="Emails" />
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
                        <h3 class="card-title">emails</h3>

                        <div class="card-tools">

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>Creation date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($emails as $email)
                                <tr id="{{$email->id}}">
                                    <td>{{$email->id}}</td>
                                    <td>{{$email->fullname}}</td>
                                    <td>{{$email->phone}}</td>
                                    <td>{{$email->created_at->format('d M Y')}}</td>
                                    <td>
                                        <a href="{{route('admin.mail.show' , $email->id)}}">
                                            <i class="fa fa-eye text-primary custom-icon"></i>
                                        </a>
                                        <a style="cursor: pointer;">
                                            <i class="fa fa-trash text-primary custom-icon" onclick="remove({{$email->id}})"></i>
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
            {!! $emails->links("pagination::bootstrap-4") !!}
        </div>

    </x-slot>



    <x-slot name="scripts">
        <script src="{{asset('dashboard/js/views/mail/index.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>
