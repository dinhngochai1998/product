<?php

namespace App\Http\View\Composers;

use App\Category;
use App\Helper\CategoriesConstant;
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
                                       ->where('name', '<>', CategoriesConstant::NEWS)
                                       ->where('name', '<>', CategoriesConstant::USER_MANUAL)
                                       ->get();
        $subCategories = Category::where('parent_id', '<>', null)
                                 ->where('name', '<>', CategoriesConstant::NEWS)
                                 ->where('name', '<>', CategoriesConstant::USER_MANUAL)
                                 ->get();
        $view->with(compact(
                        'categories',
                        'subCategories'
                    ));
    }
}
