<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers as Composers;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                'product.header', 'product.all-product', 'product.search', 'product.categories','product.detail',
                'product.index','product.header','product.category',
                ],
                'App\Http\View\Composers\CategoryAndSubCategory',
        );

        View::composer(
            [
                'product.header', 'product.all-product', 'product.search', 'product.categories','product.detail',
                'product.index','product.header','product.category',
            ],
            'App\Http\View\Composers\CategoriesComposer',

        );
    }
}
