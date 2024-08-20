<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;


    // protected $table1 = "addproduct";
    protected $table = "cart";
    protected $primary_key = "id";
}
