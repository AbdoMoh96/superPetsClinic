<?php


namespace App\View\Composers;


use App\Models\Contact;
use App\Models\Setting;
use App\Models\About;
use Illuminate\View\View;

class LandingComposer
{
    public function compose(View $view){

        $contact = Contact::first();
        $contact->load('contact_en' , 'contact_ar');

        $settings = Setting::first();
        $settings->load('settings_en' , 'settings_ar');

        $about = About::first();
        $about->load('about_en' , 'about_ar');


        $view->with('contact' , $contact);
        $view->with('setting' , $settings);
        $view->with('about' , $about);
    }

}
