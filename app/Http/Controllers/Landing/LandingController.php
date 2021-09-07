<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;


class LandingController extends Controller
{
    public function home(){
     $homeSlider = Slider::where('slug' , 'clinic_home_slider')->first();
     $homeSlider->load('slides');
     $homeSlider->slides->load('slide_en' , 'slide_ar');

     $services = Slider::where('slug' , 'clinic_services')->first();
     $services->load('slides');
     $services->slides->load('slide_en' , 'slide_ar');

     $gallery = Slider::where('slug' , 'clinic_gallery')->first();
     $gallery->load('slides');
     $gallery->slides->load('slide_en' , 'slide_ar');


     return view('landing.home' , compact('homeSlider' , 'services' , 'gallery'));
    }
}
