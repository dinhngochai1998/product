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
        $categories = Category::query()->whereNull('parent_id')->get();
        $subCategories = Category::where('parent_id', '<>', null)->get();
        $products = Product::query()->with('categories')->get();
        return view('product.index', compact('categories', 'subCategories', 'products'));
    }

}