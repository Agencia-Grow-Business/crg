<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (str_starts_with(base_path(), '/var/task')) {
            $this->app->useStoragePath('/tmp/laravel');
            $this->app['config']->set('view.compiled', '/tmp/laravel/framework/views');
            $this->app['config']->set('logging.default', 'stderr');
            $this->app['config']->set('session.driver', 'cookie');
            $this->app['config']->set('cache.default', 'array');
            $this->app['config']->set('queue.default', 'sync');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
