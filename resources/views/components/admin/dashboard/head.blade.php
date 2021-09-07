<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Google Font: Source Sans Pro -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset("dashboard/fonts/fontawesome-free/css/all.min.css")}}" />
{{--    <script src="https://kit.fontawesome.com/ae85377f3e.js" crossorigin="anonymous"></script>--}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("dashboard/css/adminlte.min.css")}}" />

    <link rel="stylesheet" href="{{asset("dashboard/css/select2.min.css")}}" />

    <link rel="stylesheet" href="{{asset("dashboard/filepond/filepond.css")}}" />

    <link rel="stylesheet" href="{{asset("dashboard/css/custom.css")}}" />

    <meta name="_token" content="{{ csrf_token() }}">

    {{ $slot ?? '' }}
</head>
