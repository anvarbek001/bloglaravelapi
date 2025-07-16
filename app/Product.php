<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'rating',
        'price',
        'content',
        'description',
    ];

    public function getPhotoAttribute($value)
    {
        return url($value); // "images/..." -> "http://127.0.0.1:8000/images/..."
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
