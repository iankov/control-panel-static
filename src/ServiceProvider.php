<?php

namespace Iankov\ControlPanelStatic;

use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'icp-static');

        $this->publishes([
            __DIR__.'/config' => base_path('config'),
        ], 'icp_static_config');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/iankov/control-panel-static'),
        ], 'icp_static_views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/helpers.php';
    }
}
