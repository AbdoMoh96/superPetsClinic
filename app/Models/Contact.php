<?php

namespace App\Models;

use App\Models\Lang\ContactLang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    public function contact_en(){
        return $this->hasOne(ContactLang::class , 'contact_id' , 'id')
            ->where('lang' , 'en');
    }

    public function contact_ar(){
        return $this->hasOne(ContactLang::class , 'contact_id' , 'id')
            ->where('lang' , 'ar');
    }
}
