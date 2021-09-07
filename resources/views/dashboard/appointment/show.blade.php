<x-admin.dashboard.layout starter="appointment">

    <x-slot name="head">
        <title> {{ config('app.name') }} | appointment </title>
        <style>
            .custom-icon{
                font-size:22px;
            }
        </style>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" name="dashboard" route="admin.dashboard"/>
        <x-admin.dashboard.items.bread-crumb-link active="0" name="appointments" route="admin.appointment.index"/>
        <x-admin.dashboard.items.bread-crumb-link active="1" name="appointment" />
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
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Read {{$appointment->fullname."'s"}} Appointment Request.</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="mailbox-read-info">
                            <h5>Message Subject Is Placed Here</h5>
                            <h6>From: {{$appointment->email}} ({{$appointment->phone}})
                                <span class="mailbox-read-time float-right">{{$appointment->created_at->format('d M Y')}}</span>
                            </h6>
                        </div>
                        <!-- /.mailbox-read-info -->

                        <!-- /.mailbox-controls -->
                        <div class="mailbox-read-message">
                            <p>Hello SuperPets,</p>

                            <p>{{$appointment->message}}</p>

                            <p>Thanks,<br>{{$appointment->fullname}}</p>
                        </div>
                        <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer -->
                    <div class="card-footer">
                        <button type="button"
                                onclick="remove({{$appointment->id}})"
                                class="btn btn-default">
                            <i class="far fa-trash-alt"></i>
                            Delete
                        </button>

                        <div class="float-right">
                            <button type="button"
                                    onclick="document.getElementById('confirm-form').submit()"
                                    class="btn btn-default">
                                @if($appointment->confirmed)
                                    <i class="fas fa-times-circle text-danger"></i>
                                    remove confirmation
                                @else
                                    <i class="fas fa-check-circle text-success"></i>
                                    confirm
                                @endif
                            </button>

                            <form id="confirm-form" action="{{route('admin.appointment.update')}}" method="post" class="d-none">
                                @csrf
                                <input type="hidden" name="id" value="{{$appointment->id}}">
                                <input type="hidden" name="confirmed" value="@if($appointment->confirmed) 0 @else 1 @endif"/>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </x-slot>

    <x-slot name="scripts">
        <script src="{{asset('dashboard/js/views/appointments/show.js')}}"></script>
    </x-slot>
</x-admin.dashboard.layout>
