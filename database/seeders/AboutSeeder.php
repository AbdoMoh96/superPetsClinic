<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;
use App\Models\Lang\AboutLang;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new About();
        $about->save();

        $aboutLangEn = new AboutLang();
        $aboutLangEn['about_id'] = $about['id'];
        $aboutLangEn['lang'] = 'en';
        $aboutLangEn->save();

        $aboutLangAr = new AboutLang();
        $aboutLangAr['about_id'] = $about['id'];
        $aboutLangAr['lang'] = 'ar';
        $aboutLangAr->save();
    }
}
