@if ($state === "success")

<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> {{$title}}  </h5>
    {{$message}}
  </div>


@elseif ($state === "danger")

<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-ban"></i> {{$title}} </h5>
    {{$message}}
</div>

@endif


{{-- <x-admin.dashboard.items.alert state="danger" message="every thing has gone to shit"/> --}}
{{-- <x-admin.dashboard.items.alert state="success" message="every thing is just fine"/> --}}



