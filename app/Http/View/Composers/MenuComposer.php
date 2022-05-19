<?php

namespace App\Http\View\Composers;

use App\Category;
use App\Product;
use Illuminate\View\View;


class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @rerurn void
     */
    public function compose(View $view)
    {
        $categories = Category::query()->whereNull('parent_id')->get();
        $subCategories = Category::where('parent_id', '<>', null)->get();
        $view->with(compact(
                        'categories',
                        'subCategories'
                    ));
    }
}
