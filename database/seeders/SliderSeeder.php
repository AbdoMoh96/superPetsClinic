<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;
use App\Models\Slide;
use App\Models\Lang\SlideLang;
use Illuminate\Support\Str;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$storeHomeSlider = new Slider();
        $storeHomeSlider->name = 'homepage slider';
        $storeHomeSlider->description = "store's homepage slider";
        $storeHomeSlider->slug = Str::slug('homepage slider' , '_');
        $storeHomeSlider->domain = 'store';
        $storeHomeSlider->save();


        $storePartnersSlider = new Slider();
        $storePartnersSlider->name = 'partners';
        $storePartnersSlider->description = "store's partners slider";
        $storePartnersSlider->slug = Str::slug('partners' , '_');
        $storePartnersSlider->domain = 'store';
        $storePartnersSlider->save();


        $storeTeamSlider = new Slider();
        $storeTeamSlider->name = 'team';
        $storeTeamSlider->description = "store's team's slider";
        $storeTeamSlider->slug = Str::slug('team' , '_');
        $storeTeamSlider->domain = 'store';
        $storeTeamSlider->save();*/

        $clinicHomeSlider = new Slider();
        $clinicHomeSlider->name = 'clinic home slider';
        $clinicHomeSlider->description = "clinic's home slider";
        $clinicHomeSlider->slug = Str::slug('clinic home slider' , '_');
        $clinicHomeSlider->domain = 'clinic';
        $clinicHomeSlider->save();

        $clinicServicesSlider = new Slider();
        $clinicServicesSlider->name = 'clinic services';
        $clinicServicesSlider->description = "clinic's services slider";
        $clinicServicesSlider->slug = Str::slug('clinic services' , '_');
        $clinicServicesSlider->domain = 'clinic';
        $clinicServicesSlider->save();

        $clinicGallerySlider = new Slider();
        $clinicGallerySlider->name = 'clinic gallery';
        $clinicGallerySlider->description = "clinic's gallery slider";
        $clinicGallerySlider->slug = Str::slug('clinic gallery' , '_');
        $clinicGallerySlider->domain = 'clinic';
        $clinicGallerySlider->save();



    }
}
