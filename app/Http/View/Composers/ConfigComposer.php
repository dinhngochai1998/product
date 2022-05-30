<?php

namespace App\Http\View\Composers;

use App\Config;
use App\PhoneGif;
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
        $phoneGifs = PhoneGif::query()->get();
        $config = Config::query()->first();
        $view->with(compact(
                        'config','phoneGifs',
                    ));
    }
}
