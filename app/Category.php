<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'photo'];

    // Category.php (Model)
    public function getPhotoAttribute($value)
    {
        return url($value); // "images/..." -> "http://127.0.0.1:8000/images/..."
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
