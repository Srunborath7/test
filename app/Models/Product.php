<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Product extends Model
{
    protected $collection = 'products';
    protected $fillable = ['name', 'image', 'price', "discount",];
    protected $appends = ['image_url'];
    // public function getImageUrlAttribute()
    // {
    //     if (!empty($this->image)) {
    //         return asset('storage/' . $this->image);
    //     }
    //     return null;
    // }
    public function getImageUrlAttribute()
{
    return secure_url('storage/' . $this->image);
}
}
