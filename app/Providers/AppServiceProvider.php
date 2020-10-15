<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Logo;
use App\Data;
use App\Red;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        
        $default   = Logo::where('type','default')->first();
        $favicon   = Logo::where('type','favicon')->first();
        $headband  = Logo::where('type','header')->first();
        $footband  = Logo::where('type','footer')->first();

        $location1 = Data::where('type','info-direccion1')->first();
        $location2 = Data::where('type','info-direccion2')->first();
        $phone1    = Data::where('type','info-telefono1')->first();
        $phone2    = Data::where('type','info-telefono2')->first();
        $emailfoot = Data::where('type','info-correo')->first();
        $phonehead = Data::where('type','header-telefono')->first();
        $emailhead = Data::where('type','header-correo')->first();
        $api_map   = Data::where('type','contacto-mapa')->first();
        $privacity = Data::where('type','contacto-informacion')->first();

        $redes     = Red::where('section','footer')->orderBy('order')->get();

        view()->share([
          'default'   => $default,
          'favicon'   => $favicon,
          'headband'  => $headband,
          'footband'  => $footband,
          'location1' => $location1,
          'location2' => $location2,
          'phone1'    => $phone1,
          'phone2'    => $phone2,
          'emailfoot' => $emailfoot,
          'phonehead' => $phonehead,
          'emailhead' => $emailhead,
          'api_map'   => $api_map,
          'privacity' => $privacity,
          'redes'     => $redes,
        ]);
    }
}
