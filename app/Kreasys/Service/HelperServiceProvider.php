<?php
namespace App\Kreasys\Service;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('helper', function()
        {
            return new \App\Kreasys\Helper;
        });
    }
}