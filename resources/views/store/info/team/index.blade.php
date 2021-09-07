<x-store.layout>

    <x-slot name="head">
        <title> {{config('app.name')}} | Team </title>
    </x-slot>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{trans('store.team_crumb_title')}}</h2></div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('store.index')}}">{{trans('store.home_crumb_title')}}</a></li>
                            <li class="breadcrumb-item active">{{trans('store.team_crumb_title')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- category -->
    <section class="section-b-space ratio_portrait">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="slide-4 category-m no-arrow">
                        @foreach($teamSlider->slides as $slide)
                            <div>
                                <div class="category-wrapper">
                                    <div>
                                        <div>
                                            <img src="{{asset($slide->image_path)}}"
                                                 class="img-fluid blur-up lazyload bg-img" alt="">
                                        </div>
                                        <h4>{{$slide->{'slide_'.app()->getLocale()}->title}}</h4>
                                        <ul class="category-link">
                                            <li>
                                                <a href="{{$slide->url}}">
                                                    {{$slide->{'slide_'.app()->getLocale()}->subtitle}}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{route('store.team.show' , $slide->id)}}" target="_blank" class="btn-solid btn">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category end -->



</x-store.layout>
