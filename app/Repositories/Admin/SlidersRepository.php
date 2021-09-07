<?php


namespace App\Repositories\Admin;
use App\Interfaces\Admin\SlidersInterface;
use Illuminate\Support\Facades\Auth;
use App\Models\Slider;
use App\Models\Slide;
use App\Models\Lang\SlideLang;
use Illuminate\Support\Facades\File;

class SlidersRepository implements SlidersInterface
{

/*##########Abdelrahman##Mohammed#El-sayed###########
* ##############FullStack#Web#Developer#############
* ##########Phone#=>01121226689##Egypt##############
* ######Email#=>abdo.moh96@outlook.com##############
* ######github#=>github.com/AbdoMoh96/##############*/

    public function getAll()
    {
        return Slider::all();
    }

    public function store($data)
    {
        // TODO: Implement store() method.
    }

    public function SliderBySlug($slug)
    {
        $slider = Slider::where('slug' , $slug)->firstOrFail();
        $slider->load('slides');
        return $slider;
    }

    public function slideById($id){
        $slide = Slide::findOrFail($id);
        $slide->load('slide_en' , 'slide_ar');
        return $slide;
    }

    public function storeSlide($data)
    {
        $slide = new Slide();
        $slide['slider_id'] = $data['slider_id'];
        $slide['url'] = $data['url'];
        $slide['image_path'] = $data['image'];
        $slide['admin_id'] = Auth::guard('admin')->user()->id;
        $slide->save();

        $slideLangEn = new SlideLang();
        $slideLangEn['lang'] = 'en';
        $slideLangEn['slide_id'] = $slide['id'];
        $slideLangEn['title'] = $data['title'];
        $slideLangEn['subtitle'] = $data['subtitle'];
        $slideLangEn['description'] = $data['description'];
        $slideLangEn['btn_text'] = $data['btn_text'];
        $slideLangEn->save();

        $slideLangAr = new SlideLang();
        $slideLangAr['lang'] = 'ar';
        $slideLangAr['slide_id'] = $slide['id'];
        $slideLangAr['title'] = $data['title_ar'];
        $slideLangAr['subtitle'] = $data['subtitle_ar'];
        $slideLangAr['description'] = $data['description_ar'];
        $slideLangAr['btn_text'] = $data['btn_text_ar'];
        $slideLangAr->save();
    }

    public function update($data)
    {
        $slide = Slide::find($data['id']);
        $slide['slider_id'] = $data['slider_id'];
        $slide['url'] = $data['url'];
        if($data['image']) {
            File::delete($slide['image_path']);
            $slide['image_path'] = $data['image'];
        }
        $slide->update();

        $slideLangEn = $slide->slide_en;
        $slideLangEn['lang'] = 'en';
        $slideLangEn['slide_id'] = $slide['id'];
        $slideLangEn['title'] = $data['title'];
        $slideLangEn['subtitle'] = $data['subtitle'];
        $slideLangEn['description'] = $data['description'];
        $slideLangEn['btn_text'] = $data['btn_text'];
        $slideLangEn->update();

        $slideLangAr = $slide->slide_ar;
        $slideLangAr['lang'] = 'ar';
        $slideLangAr['slide_id'] = $slide['id'];
        $slideLangAr['title'] = $data['title_ar'];
        $slideLangAr['subtitle'] = $data['subtitle_ar'];
        $slideLangAr['description'] = $data['description_ar'];
        $slideLangAr['btn_text'] = $data['btn_text_ar'];
        $slideLangAr->update();
    }

    public function delete($id)
    {
       $slide = Slide::find($id);
       $slide->delete();
    }


}
