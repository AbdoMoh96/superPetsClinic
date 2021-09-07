<x-admin.dashboard.layout starter="Appointments">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Appointments </title>
        <style>
            .custom-icon{
                font-size:22px;
            }
        </style>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" name="dashboard" route="admin.dashboard"/>
        <x-admin.dashboard.items.bread-crumb-link active="1" name="appointments" />
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
                        <h3 class="card-title">appointments</h3>

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
                                <th>Confirmed</th>
                                <th>Creation date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                <tr id="{{$appointment->id}}">
                                    <td>{{$appointment->id}}</td>
                                    <td>{{$appointment->fullname}}</td>
                                    <td>{{$appointment->phone}}</td>
                                    <td>
                                        @if($appointment->confirmed)
                                            <i class="fas fa-check-circle text-success"></i>
                                         @else
                                           <i class="fas fa-times-circle text-danger"></i>
                                        @endif
                                    </td>
                                    <td>{{$appointment->created_at->format('d M Y')}}</td>
                                    <td>
                                        <a href="{{route('admin.appointment.show' , $appointment->id)}}">
                                            <i class="fa fa-eye text-primary custom-icon"></i>
                                        </a>
                                        <a style="cursor: pointer;">
                                            <i class="fa fa-trash text-primary custom-icon"
                                               onclick="remove({{$appointment->id}})"></i>
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
            {!! $appointments->links("pagination::bootstrap-4") !!}
        </div>

    </x-slot>


    <x-slot name="scripts">
        <script src="{{asset('dashboard/js/views/appointments/index.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>
