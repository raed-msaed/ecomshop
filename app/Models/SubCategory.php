<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_name',
        'slug',
        'product_count',
        'category_id',
        'category_name',
    ];
}
