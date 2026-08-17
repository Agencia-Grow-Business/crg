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
        if (is_dir('/var/task') || getenv('LAMBDA_TASK_ROOT') || getenv('VERCEL') || getenv('VERCEL_ENV')) {
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
