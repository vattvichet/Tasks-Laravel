<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'long_description',
        'completed',
        // Add any other attributes here that you want to be mass-assignable
    ];
}
