<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lang\SlideLang;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slide extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'slides';

    public function slider(){
        return $this->belongsTo(Slider::class , 'slider_id' , 'id');
    }

    public function slide_en(){
        return $this->hasOne(SlideLang::class , 'slide_id' , 'id')->where('lang' , 'en');
    }

    public function slide_ar(){
        return $this->hasOne(SlideLang::class , 'slide_id' , 'id')->where('lang' , 'ar');
    }
}
