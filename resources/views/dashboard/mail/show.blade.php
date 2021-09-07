<x-admin.dashboard.layout starter="email">

    <x-slot name="head">
        <title> {{ config('app.name') }} | email </title>
        <style>
            .custom-icon{
                font-size:22px;
            }
        </style>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" name="dashboard" route="admin.dashboard"/>
        <x-admin.dashboard.items.bread-crumb-link active="0" name="emails" route="admin.mail.index"/>
        <x-admin.dashboard.items.bread-crumb-link active="1" name="email" />
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
                    <h3 class="card-title">Read {{$email->fullname."'s"}} Email</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="mailbox-read-info">
                        <h5>Message Subject Is Placed Here</h5>
                        <h6>From: {{$email->email}} ({{$email->phone}})
                            <span class="mailbox-read-time float-right">{{$email->created_at->format('d M Y')}}</span></h6>
                    </div>
                    <!-- /.mailbox-read-info -->

                    <!-- /.mailbox-controls -->
                    <div class="mailbox-read-message">
                        <p>Hello SuperPets,</p>

                        <p>{{$email->message}}</p>

                        <p>Thanks,<br>{{$email->fullname}}</p>
                    </div>
                    <!-- /.mailbox-read-message -->
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer -->
                <div class="card-footer">
                    <button type="button"
                            onclick="remove({{$email->id}})"
                            class="btn btn-default">
                            <i class="far fa-trash-alt"></i>
                         Delete
                    </button>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        </div>
    </x-slot>



    <x-slot name="scripts">
        <script src="{{asset('dashboard/js/views/mail/show.js')}}"></script>
    </x-slot>

</x-admin.dashboard.layout>

{{--<button class="btn btn-success" onclick="remove({{$email->id}})">delete</button>--}}
