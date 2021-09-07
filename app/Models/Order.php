<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory , SoftDeletes;
    protected $table = 'orders';

    public function products(){
        return $this->belongsToMany(Product::class , 'order_details' , 'order_id' , 'product_id')
            ->withPivot('quantity' , 'total' , 'price')
            ->withTrashed();
    }

    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id')->withTrashed();
    }

    public function address(){
        return $this->belongsTo(Address::class , 'address_id' , 'id')->withTrashed();
    }
}
