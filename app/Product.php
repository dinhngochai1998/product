<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function categories()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'id_product');
    }

}
