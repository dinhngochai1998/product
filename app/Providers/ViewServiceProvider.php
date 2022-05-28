<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
                'product.header', 'product.all-product', 'product.search', 'product.categories', 'product.detail',
                'product.index', 'product.header', 'product.category', 'product.news'
            ],
            'App\Http\View\Composers\CategoryAndSubCategory',
        );

        View::composer(
            [
                'product.header', 'product.all-product', 'product.search', 'product.categories', 'product.detail',
                'product.index', 'product.header', 'product.category', 'product.news', 'product.news-detail'
            ],
            'App\Http\View\Composers\CategoriesComposer',

        );
    }
}
