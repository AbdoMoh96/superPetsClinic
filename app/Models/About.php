<?php

namespace App\Models;

use App\Models\Lang\AboutLang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    public function about_en(){
        return $this->hasOne(AboutLang::class , 'about_id' , 'id')
            ->where('lang' , 'en');
    }

    public function about_ar(){
        return $this->hasOne(AboutLang::class , 'about_id' , 'id')
            ->where('lang' , 'ar');
    }
}
