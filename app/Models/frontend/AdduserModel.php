<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdduserModel extends Model
{
    use HasFactory;

    protected $table = "register_user";
    protected $primary_key = "id";

    protected $fillable = [
        'fullname',
        'email',
        'password',
        'type',
        'picture',

    ];
}
