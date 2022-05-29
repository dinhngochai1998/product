<?php
/**
 * @Author Admin
 * @Date   May 18, 2022
 */

namespace Wave\Http\Controllers;

use App\Category;
use App\Contact;
use App\Helper\CategoriesConstant;
use App\Helper\StatusConstant;
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
                              ->where('name', '<>', CategoriesConstant::USER_MANUAL)
                              ->where('name', '<>', CategoriesConstant::NEWS)
                              ->get();
        foreach ($categories as $category) {
            $products [] = [
                'category'    => $category,
                'subCategory' => Category::where('parent_id', $category->id)->get(),
                'product'     => Product::query()
                                        ->where('id_category', $category->id)
                                        ->where('status', StatusConstant::PUBLISHED)
                                        ->get(),
            ];
        }
        $news = Category::query()->with('posts')->where('name', CategoriesConstant::NEWS)->first();

        return view('product.index', compact('categories', 'products', 'news'));
    }

    public function allProduct()
    {
        $products = Product::query()->paginate(30);


        return view('product.all-product', compact('products'));
    }

    public function news()
    {
        $categoryNews = Category::query()->where('name', CategoriesConstant::NEWS)->first();
        $news = Post::query()->where('category_id', $categoryNews->id)->paginate(10);

        return view('product.news', compact('news'));
    }

    public function newsDetail($slug)
    {
        $newsDetail = Post::query()
                          ->where('slug', $slug)
                          ->first();

        return view('product.news-detail',
                    compact('newsDetail'));
    }

    public function search(Request $request)
    {
        $searchProduct = Product::query()
                                ->where('name', 'like', '%' . $request->search . '%')
                                ->paginate(30);

        return view('product.search',
                    compact('searchProduct'));
    }

    public function contact()
    {
        return view('product.contact');
    }

    public function createContact(Request $request)
    {
        Contact::query()->create($request->all());

        return view('product.contact');
    }

}