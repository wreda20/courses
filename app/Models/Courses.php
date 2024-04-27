<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'description', 'lessons', 'day', 'level', 'doctor', 'image', 'title', 'uses_id'
    ];


}
