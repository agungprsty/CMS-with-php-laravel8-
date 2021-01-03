<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CategoryPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 
        'posts_id',
    ];
}