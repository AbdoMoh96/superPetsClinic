<?php

namespace App\Models\Lang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductLang extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'products_lang';
}
