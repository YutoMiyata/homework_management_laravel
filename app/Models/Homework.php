<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{

    protected $fillable = [
        'name',
        'japanese',
        'math',
        'english',
        'science',
        'society',
    ];

    use HasFactory;
}
