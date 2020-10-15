<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DataServiceProvider extends ServiceProvider
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
      view()->composer(['adm.layouts.sidebar',
                        'adm.auth.login',
                        'adm.layouts.manual',
                        'adm.product.show',
                    ], function ($view) {
          $logo    = \App\Logo::where('type', 'security')->first();
          $view->with(compact('logo'));
      });
    }
}
