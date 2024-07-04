<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custumer extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'city_id',
        'first_name',
        'last_name',
        'birth',
        'gender',
        'address',
    ];
}
