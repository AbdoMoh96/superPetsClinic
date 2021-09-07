<?php


namespace App\View\Composers;


use App\Models\Contact;
use App\Models\Setting;
use Illuminate\View\View;

class DashboardComposer
{
    public function compose(View $view){

        $settings = Setting::first();
        $contacts = Contact::first();

        $view->with('setting' , $settings);
        $view->with('contact' , $contacts);
    }
}
