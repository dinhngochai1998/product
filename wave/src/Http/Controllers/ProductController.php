<?php
/**
 * @Author Admin
 * @Date   May 18, 2022
 */

namespace Wave\Http\Controllers;

use App\Category;
use App\Helper\RateConstant;
use App\Product;
use Illuminate\Http\Request;
use Wave\Post;

class ProductController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $products   = [];
        $categories = Category::query()
                              ->whereNull('parent_id')
                              ->where('name', '<>', 'Hướng dẫn sử dụng')
                              ->where('name', '<>', 'Tin tức')
                              ->get();
        foreach ($categories as $category) {
            $products [] = [
                'category'    => $category,
                'subCategory' => Category::where('parent_id', $category->id)->get(),
                'product'     => Product::query()->where('id_category', $category->id)->get(),
            ];
        }
        $news          = Category::query()->with('posts')->where('name', 'Tin tức')->first();
        $subCategories = Category::where('parent_id', '<>', null)->get();

        return view('product.index', compact('categories', 'subCategories', 'products', 'news'));
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
        $news       = Category::query()->with('posts')->where('name', 'Tin tức')->first();
        $userManual = Category::query()->with('posts')->where('name', 'Hướng dẫn sử dụng')->first();

        return view('product.news', compact('news', 'userManual'));
    }

    public function newsDetail($slug)
    {
        $newsDetail          = Post::query()
                                   ->where('slug', $slug)
                                   ->first();
        $promotionalProducts = Product::query()->where('rate', RateConstant::PROMOTIONAL_PRODUCTS)->get();
        $featuredProducts    = Product::query()->where('rate', RateConstant::FEATURED_PRODUCTS)->get();
        $userManual          = Category::query()->with('posts')->where('name', 'Hướng dẫn sử dụng')->first();

        return view('product.news-detail',
                    compact('newsDetail', 'featuredProducts', 'promotionalProducts', 'userManual'));
    }

    public function search(Request $request)
    {
        $searchProduct       = Product::query()
                                      ->where('name', 'like', '%' . $request->search . '%')
                                      ->paginate(30);
        $promotionalProducts = Product::query()->where('rate', RateConstant::PROMOTIONAL_PRODUCTS)->limit(4)->get();
        $userManual          = Category::query()->with('posts')
                                       ->where('name', 'Hướng dẫn sử dụng')
                                       ->limit(4)
                                       ->first();
        $featuredProducts    = Product::query()->where('rate', RateConstant::FEATURED_PRODUCTS)->limit(4)->get();

        return view('product.search',
                    compact('searchProduct', 'promotionalProducts', 'userManual', 'featuredProducts'));
    }

    public function contact() {
        return view('product.contact');
    }

    public function createContact(Request $request) {
        dd($request->all());
    }
    
}