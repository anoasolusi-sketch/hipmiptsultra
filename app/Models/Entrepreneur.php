<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrepreneur extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'campus',
        'business_name',
        'business_sector',
        'phone',
        'image',
        'status',
    ];
}
