<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\Lang\SettingLang;
class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new Setting();
        $setting['lang'] = 'en';
        $setting['active'] = 1;
        $setting->save();

        $settingLangEn = new SettingLang();
        $settingLangEn['lang'] = 'en';
        $settingLangEn['setting_id'] = $setting['id'];
        $settingLangEn->save();

        $settingLangAr = new SettingLang();
        $settingLangAr['lang'] = 'ar';
        $settingLangAr['setting_id'] = $setting['id'];
        $settingLangAr->save();
    }
}
