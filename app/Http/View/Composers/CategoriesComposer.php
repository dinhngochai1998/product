<?php

namespace App\Http\View\Composers;

use App\Category;
use App\Helper\RateConstant;
use App\Product;
use Illuminate\View\View;


class CategoriesComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     *
     * @rerurn void
     */
    public function compose(View $view)
    {
        $promotionalProducts = Product::query()->where('rate', RateConstant::PROMOTIONAL_PRODUCTS)->limit(4)->get();
        $userManual          = Category::query()->with('posts')
                                       ->where('name', 'Hướng dẫn sử dụng')
                                       ->limit(4)
                                       ->first();
        $featuredProducts    = Product::query()->where('rate', RateConstant::FEATURED_PRODUCTS)->limit(4)->get();

        $view->with(compact(
                        'promotionalProducts',
                        'userManual',
                        'featuredProducts'
                    ));
    }
}
