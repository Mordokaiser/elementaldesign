<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'last_name2',
        'rut',
        'birthday_date',
        'city',
        'address',
        'phone_number',
        'created_at',
        'updated_at',
    ];
}
