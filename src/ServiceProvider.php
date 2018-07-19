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
            __DIR__.'/views' => base_path('resources/views/vendor/iankov/control-panel-static'),
        ], 'icp_static_views');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'icp_static_migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/helpers.php';

        $config = require __DIR__ . '/config.php';
        $icp = $this->app['config']->get('icp', []);
        $this->app['config']->set('icp', array_replace_recursive($config, $icp));
    }
}
