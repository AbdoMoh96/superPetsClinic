<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Admin\SlidersInterface;
class SlidersController extends Controller
{
    private $sliderRepo;

    public function __construct(SlidersInterface $repo)
    {
        $this->sliderRepo = $repo;
    }

    public function index(){
        $sliders = $this->sliderRepo->getAll();
        return view('dashboard.sliders.index' , compact('sliders'));
    }

    public function showSlides($slider){
        $slider = $this->sliderRepo->SliderBySlug($slider);
        return view('dashboard.slides.index' , compact('slider'));
    }

    public function createSlide($slider){
        $slider = $this->sliderRepo->SliderBySlug($slider);
        return view('dashboard.slides.create' , compact('slider'));
    }

    public function storeSlide(Request $request){
        $this->sliderRepo->storeSlide($request);
        return redirect()
            ->route('admin.slider.slides.index' , $request['slug'])
            ->with('success' , 'slide updated successfully!!');
    }

    public function editSlide($id){
      $slide = $this->sliderRepo->slideById($id);
      return view('dashboard.slides.edit', compact('slide'));
    }

    public function updateSlide(Request $request){
        $this->sliderRepo->update($request);
        return redirect()
            ->route('admin.slider.slides.index' , $request['slug'])
            ->with('success' , 'slide updated successfully!!');
    }

    public function deleteSlide($id){
        $this->sliderRepo->delete($id);
    }

}
