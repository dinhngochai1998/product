<?php

namespace App\Http\View\Composers;

use App\Category;
use App\Config;
use App\Helper\CategoriesConstant;
use App\Helper\RateConstant;
use App\Helper\StatusConstant;
use App\Product;
use Illuminate\View\View;


class ConfigComposer
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
        $config = Config::query()->first();
        $view->with(compact(
                        'config',
                    ));
    }
}
