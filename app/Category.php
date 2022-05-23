<?php
/**
 * @Author Admin
 * @Date   May 18, 2022
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use Wave\Post;


class Category extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'id_category');
    }

    // public function posts()
    // {
    //     return $this->hasMany(Post::class, 'id_category');
    // }
    public function posts(){
        return $this->hasMany('Wave\Post');
    }

}