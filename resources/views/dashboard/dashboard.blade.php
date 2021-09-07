<x-admin.dashboard.layout starter="dashboard">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Dashboard </title>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="1" name="dashboard" />
    </x-slot>

    <x-slot name="alerts">
{{--        <x-admin.dashboard.items.alert state="success" message="every thing is just fine"/>--}}
    </x-slot>


    <x-slot name="mainContent">

    </x-slot>



    <x-slot name="scripts">
        <script type="text/javascript">
        </script>
    </x-slot>

</x-admin.dashboard.layout>
