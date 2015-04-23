<?php
namespace App\Kreasys\Service;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('theme', function()
        {
            return new \App\Kreasys\Theme;
        });
    }
}