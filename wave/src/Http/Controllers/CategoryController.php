<?php
/**
 * @Author Admin
 * @Date   May 19, 2022
 */

namespace Wave\Http\Controllers;

use App\Category;
use App\Helper\RateConstant;
use App\Helper\StatusConstant;
use App\Product;

class CategoryController extends \App\Http\Controllers\Controller
{
    public function index($slug)
    {
        $category = Category::query()->where('slug', $slug)->first();
        $products = Product::query()
                           ->where('id_category', $category->id)
                           ->where('status', StatusConstant::PUBLISHED)
                           ->get();

        return view('product.category', compact('products', 'category'));
    }

    public function detailProduct($slug)
    {
        $product             = Product::query()->with('productImages')->where('slug', $slug)->first();
        $product ?? abort(404);
        $promotionalProducts = Product::query()->where('rate', RateConstant::PROMOTIONAL_PRODUCTS)->get();
        $featuredProducts    = Product::query()->where('rate', RateConstant::FEATURED_PRODUCTS)->get();
        $latestProducts      = Product::query()->where('rate', RateConstant::LATEST_PRODUCTS)->get();

        $seo = [
            'title'         => $product->name ?? null,
            'description'   => $product->seo_description ?? $product->sub_discription,
            'image'         => url('storage/'.$product->image),
            'type'          => 'website',
            'keywords'    => 'thế giới diện máy, hàng điện tử, máy lạnh, điều hoà'
        ];

        return view('product.detail',
                    compact(['product', 'latestProducts', 'featuredProducts', 'promotionalProducts', 'seo']));
    }
}