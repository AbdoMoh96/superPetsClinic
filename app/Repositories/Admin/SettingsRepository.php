<?php


namespace App\Repositories\Admin;


use App\Interfaces\Admin\SettingsInterface;
use App\Models\Setting;

class SettingsRepository implements SettingsInterface
{

    public function getSettings()
    {
        $settings = Setting::first();
        $settings->load('settings_en' , 'settings_ar');
        return $settings;
    }

    public function update($data)
    {
        $settings = Setting::first();
        $settings['lang'] = $data['lang'];

        if($data['admin_logo']){
            $settings['admin_logo'] = $data['admin_logo'];
        }

        if($data['h_logo']){
            $settings['h_logo'] = $data['h_logo'];
        }

        if($data['f_logo']){
            $settings['f_logo'] = $data['f_logo'];
        }

        if($data['clinic_logo']){
            $settings['clinic_logo'] = $data['clinic_logo'];
        }

        if($data['store_logo']){
            $settings['store_logo'] = $data['store_logo'];
        }

        if($data['active']) {
            $settings['active'] = 1;
        }else{
            $settings['active'] = 0;
        }
        $settings->update();

        $settings->settings_en->name = $data['name'];
        $settings->settings_en->description = $data['description'];
        $settings->settings_en->update();

        $settings->settings_ar->name = $data['name_ar'];
        $settings->settings_ar->description = $data['description_ar'];
        $settings->settings_ar->update();
    }
}
