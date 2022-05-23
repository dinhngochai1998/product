<?php

namespace App\Http\View\Composers;

use App\Category;
use App\Product;
use Illuminate\View\View;


class CategoryAndSubCategory
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @rerurn void
     */
    public function compose(View $view)
    {
        $categories = Category::query()->whereNull('parent_id')
                                       ->where('name', '<>', 'tin tức')
                                       ->where('name', '<>', 'Hướng dẫn sử dụng')
                                       ->get();
        $subCategories = Category::where('parent_id', '<>', null)
                                 ->where('name', '<>', 'tin tức')
                                 ->where('name', '<>', 'Hướng dẫn sử dụng')
                                 ->get();
        $view->with(compact(
                        'categories',
                        'subCategories'
                    ));
    }
}
