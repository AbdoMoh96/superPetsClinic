<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable , SoftDeletes;

/*##########Abdelrahman##Mohammed#El-sayed###########
* ##############FullStack#Web#Developer#############
* ##########Phone#=>01121226689##Egypt##############
* ######Email#=>abdo.moh96@outlook.com##############
* ######github#=>github.com/AbdoMoh96/##############*/

    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function cart(){
        return $this->belongsToMany(Product::class , 'cart' , 'user_id' , 'product_id')
                    ->withPivot('quantity');
    }

    public function itemCount($price , $count){
        return $price * $count;
    }

    public function cartCount(){
        $total = 0.00;
        foreach (auth()->user()->cart as $product){
          $total += $product->price * $product->pivot->quantity;
        }
        return $total;
    }

    /*public function address(){
        return $this->hasOne(Address::class , 'user_id' , 'id');
    }*/

    public function address(){
        return $this->hasMany(Address::class , 'user_id' , 'id');
    }
}
