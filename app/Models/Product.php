<?php

namespace App\Models;

use App\Models\Lang\ProductLang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class Product extends Model
{
    use HasFactory , SoftDeletes , HasTags;

    protected $table = 'products';


    public function product_en(){
        return $this->hasOne(ProductLang::class , 'product_id' , 'id')
                    ->where('lang' , 'en');
    }

    public function product_ar(){
        return $this->hasOne(ProductLang::class , 'product_id' , 'id')
                    ->where('lang' , 'ar');
    }

    public function gallery(){
        return $this->hasMany(ProductImages::class , 'product_id' , 'id');
    }

    public function getCategory(){
        $name = $this->tags->first();
        if ($name) {
            $name = $name->name;
            return $name;
        }else{
            return null;
        }
    }

}
