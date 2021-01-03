<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_id', 'name_category', 'slug_category'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Posts::class, 'category_post');
    }

    public function sluggable()
    {
        return [
            'slug_category' => [
                'source' => 'name_category'
            ]
        ];
    }
}
