<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customer";
    // protected $primary_key = "id";

    protected $fillable =  [
                'name',
                'address',
                'phone',
                'age',
                'email',
                'city',
                'password'
    ];
}