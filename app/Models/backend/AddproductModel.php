<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddproductModel extends Model
{
    use HasFactory;

    protected $table = "addproduct";
    protected $primary_key = "id";

    protected $fillable = [
        'product_name',
        'slug',
        'description',
        'price',
        'quantity',
        'category_name',
        'brand',
        'status',
        'image1',
        'image2',
        'image3',

        // 'features',
        // 'specifications',
        // 'status',
        'type',
    ];
}
