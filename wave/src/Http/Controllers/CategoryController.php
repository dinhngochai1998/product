<?php
/**
 * @Author Admin
 * @Date   May 19, 2022
 */

namespace Wave\Http\Controllers;

use App\Category;
use App\Product;

class CategoryController extends \App\Http\Controllers\Controller
{
    public function index($slug) {
        $category = Category::query()->where('slug', $slug)->first();
        $products = Product::query()->where('id_category', $category->id)->get();

        return view('product.category', compact('products'));
    }

    public function detailProduct($slug) {
        $product = Product::query()->where('slug', $slug)->first();
        return view('product.detail', compact('product'));
    }
}