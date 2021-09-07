<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Slide;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';


    public function slides(){
        return $this->hasMany(Slide::class , 'slider_id' , 'id');
    }


}
