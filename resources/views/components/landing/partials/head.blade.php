<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" sizes="16x16" href="{{asset('landing/img/favicon-icon.png')}}">

    <link rel="stylesheet" href="{{asset('landing/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('landing/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('landing/css/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('landing/css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{asset('landing/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('landing/css/swiper.min.css')}}">

    <link rel="stylesheet" href="{{asset('landing/css/datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('landing/css/animate.css')}}">
    
@if(app()->getLocale() === 'en')
    <link rel="stylesheet" href="{{asset('landing/css/style.css')}}">
@endif    

    <link rel="stylesheet" href="{{asset('landing/css/responsive.css')}}">

    <script src="{{asset('landing/js/jquery.min.js')}}"></script>
   
   @if(app()->getLocale() === 'ar') 
     <link rel="stylesheet" href="{{asset('landing/css/style-ar.css')}}">
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
   @endif

    {{ $slot ?? '' }}
</head>
