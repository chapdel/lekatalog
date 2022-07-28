<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Nedwors\Navigator\Facades\Nav;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Nav::define(fn ($user) => [
            Nav::item(__('Campagnes'))
                ->for(route('campaigns')),
            /* Nav::item(__('Catalogues'))
                ->for(route('catalogs')), */
            Nav::item(__("Univers d'influences"))
                ->for(route('universes')),
            Nav::item(__("Marketinflu"))
                ->for(route('marketinflu')),
            /* Nav::item(__("Ressources"))
                ->for(route('resources')), */
            Nav::item(__("Contact"))
                ->for(route('contact')),
        ], 'header');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
