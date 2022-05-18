<?php
/**
 * @Author Admin
 * @Date   May 18, 2022
 */

namespace App;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'id_category');
    }

}