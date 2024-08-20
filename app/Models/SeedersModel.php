<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeedersModel extends Model
{
    use HasFactory;

    protected $table = "seeders";
    protected $primary_key = "id";
}

