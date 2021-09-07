<?php


namespace App\View\Composers;


use App\Models\Contact;
use App\Models\Setting;
use Illuminate\View\View;
use Spatie\Tags\Tag;

class StoreComposer
{
    public function compose(View $view){

        $contact = Contact::first();
        $contact->load('contact_en' , 'contact_ar');

        $settings = Setting::first();
        $settings->load('settings_en' , 'settings_ar');

        $categories = Tag::getWithType('category');



        $view->with('contact' , $contact);
        $view->with('setting' , $settings);
        $view->with('categories' , $categories);
    }
}
