<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SuperPetsClinic">

    <link rel="icon" href="{{asset("store/images/favicon/15.png")}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset("store/images/favicon/15.png")}}" type="image/x-icon" />

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fontawesome.com/v5.15/icons/500px?style=brands" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset("store/css/fontawesome.css")}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset("store/css/slick.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("store/css/slick-theme.css")}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset("store/css/animate.css")}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset("store/css/themify-icons.css")}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset("store/css/bootstrap.css")}}">

@if(app()->getLocale() === 'en')
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('store/css/color15.css')}}" media="screen" id="color">
    
@endif    
        <!-- font css -->

 @if(app()->getLocale() === 'ar')
 <link rel="stylesheet" type="text/css" href="{{asset('store/css/color15-ar.css')}}" media="screen" id="color">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
@endif


    {{$slot ?? ''}}
    

</head>
