<?php
namespace App\Repositories\Admin;
use App\Interfaces\Admin\AboutInterface;
use App\Models\About;
class AboutRepository implements AboutInterface
{

/*##########Abdelrahman##Mohammed#El-sayed###########
* ##############FullStack#Web#Developer#############
* ##########Phone#=>01121226689##Egypt##############
* ######Email#=>abdo.moh96@outlook.com##############
* ######github#=>github.com/AbdoMoh96/##############*/

    public function getAbout()
    {
       $about = About::first();
       $about->load('about_en' , 'about_ar');
       return $about;
    }

    public function update($data)
    {
        $about = About::first();

        if($data['description_image']) {
            $about['description_image'] = $data['description_image'];
        }

        if($data['about_image']) {
            $about['about_image'] = $data['about_image'];
        }

        $about->update();

        $about->about_en->title = $data['title'];
        $about->about_en->subtitle = $data['subtitle'];
        $about->about_en->description_text = $data['description'];
        $about->about_en->about_title = $data['about_title'];
        $about->about_en->about_subtitle = $data['about_subtitle'];
        $about->about_en->about_description_text = $data['about_description'];
        $about->about_en->update();

        $about->about_ar->title = $data['title_ar'];
        $about->about_ar->subtitle = $data['subtitle_ar'];
        $about->about_ar->description_text = $data['description_ar'];
        $about->about_ar->about_title = $data['about_title_ar'];
        $about->about_ar->about_subtitle = $data['about_subtitle_ar'];
        $about->about_ar->about_description_text = $data['about_description_ar'];
        $about->about_ar->update();
    }
}
