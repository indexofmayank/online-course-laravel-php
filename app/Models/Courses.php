<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = ['title', 
                            'image', 
                            'description', 
                            'category_id', 
                            'price', 
                            'teacher_id'
                        ];
}
