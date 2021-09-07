<?php

namespace App\Models;

use App\Models\Lang\SettingLang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    public function settings_en(){
        return $this->hasOne(SettingLang::class , 'setting_id' , 'id')
               ->where('lang' , 'en');
    }

    public function settings_ar(){
        return $this->hasOne(SettingLang::class , 'setting_id' , 'id')
            ->where('lang' , 'ar');
    }
}
