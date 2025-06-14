<?php

namespace Pola5h\GdprCookieConsentManager\Providers;

use Illuminate\Support\ServiceProvider;

class GdprCookieServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        // Publish config
        $this->publishes([
            __DIR__.'/../../config/gdprcookie.php' => config_path('gdprcookie.php'),
        ], 'gdprcookie-config');

        // Publish views
        $this->publishes([
            __DIR__.'/../../Resources/views' => resource_path('views/vendor/gdprcookie'),
        ], 'gdprcookie-views');

        // Publish assets
        $this->publishes([
            __DIR__.'/../../Resources/assets' => public_path('vendor/gdprcookie'),
        ], 'gdprcookie-assets');

        // Publish translations
        $this->publishes([
            __DIR__.'/../../lang' => resource_path('lang/vendor/gdprcookie'),
        ], 'gdprcookie-lang');

        // Load views, translations, config
        $this->loadViewsFrom(__DIR__.'/../../Resources/views', 'gdprcookie');
        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'gdprcookie');
        $this->mergeConfigFrom(__DIR__.'/../../config/gdprcookie.php', 'gdprcookie');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
