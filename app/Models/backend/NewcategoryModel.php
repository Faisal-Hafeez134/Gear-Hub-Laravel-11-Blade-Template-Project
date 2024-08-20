<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewcategoryModel extends Model
{
    use HasFactory;
    protected $table = "register_user";
    protected $primary_key = "id";

    // protected $fillable = [
    //     'category_name',
    //     'slug',
    //     'description',
    //     'meta_title',
    //     'meta_description',
    //     'meta_keywords',
    //      'image',
    //     // 'status',
    //     // 'popular',
    // ];
}
