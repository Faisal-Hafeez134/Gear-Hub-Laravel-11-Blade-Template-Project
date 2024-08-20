<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminloginModel extends Model
{
    use HasFactory;

    protected $table = "admin_login";
    protected $primary_key = "admin_id";

}
