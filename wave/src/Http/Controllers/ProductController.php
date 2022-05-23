<?php
/**
 * @Author Admin
 * @Date   May 18, 2022
 */

namespace Wave\Http\Controllers;

use App\Category;
use App\Helper\RateConstant;
use App\Product;
use Wave\Post;

class ProductController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $products   = [];
        $categories = Category::query()->whereNull('parent_id')->get();
        foreach ($categories as $category) {
            $products [] = [
                'category'    => $category,
                'subCategory' => Category::where('parent_id', $category->id)->get(),
                'product'     => Product::query()->where('id_category', $category->id)->get(),
            ];
        }
        $subCategories = Category::where('parent_id', '<>', null)->get();

        return view('product.index', compact('categories', 'subCategories', 'products'));
    }

    public function allProduct()
    {
        $products            = Product::query()->paginate(30);
        $featuredProducts    = Product::query()->where('rate', RateConstant::FEATURED_PRODUCTS)->limit(4)->get();
        $promotionalProducts = Product::query()->where('rate', RateConstant::PROMOTIONAL_PRODUCTS)->limit(4)->get();

        return view('product.all-product', compact('products', 'featuredProducts', 'promotionalProducts'));
    }

    public function news()
    {
        $news = Category::query()->with('posts')->where('name', 'Tin tức')->first();
        $userManual = Category::query()->with('posts')->where('name', 'Hướng dẫn sử dụng')->first();
        return view('product.news', compact('news','userManual'));
    }

    public function newsDetail($slug)
    {
        $newsDetail = Post::query()
                          ->where('slug', $slug)
                          ->first();
        $userManual = Category::query()->with('posts')->where('name', 'Hướng dẫn sử dụng')->first();
        return view('product.news-detail', compact('newsDetail', 'userManual'));
    }
}