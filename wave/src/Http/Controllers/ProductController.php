<?php
/**
 * @Author Admin
 * @Date   May 18, 2022
 */

namespace Wave\Http\Controllers;

use App\Category;
use App\Product;

class ProductController extends \App\Http\Controllers\Controller
{
    public function index() {
        $products = [];
        $categories = Category::query()->whereNull('parent_id')->get();
        foreach ($categories as $category) {
            $products [] = [
                'category' => $category,
                'subCategory' => Category::where('parent_id', $category->id)->get(),
                'product' =>  Product::query()->where('id_category', $category->id)->get(),
            ];
        }
        $subCategories = Category::where('parent_id', '<>', null)->get();
        return view('product.index', compact('categories', 'subCategories', 'products'));
    }

}