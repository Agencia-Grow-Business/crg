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
        $logs = $this->app->storagePath().'/logs';

        if (! is_dir($logs) || ! is_writable($logs)) {
            $tmp = '/tmp/laravel';
            foreach (['logs', 'framework/views', 'framework/cache/data', 'framework/sessions', 'app/public', 'app/private'] as $dir) {
                $path = $tmp.'/'.$dir;
                if (! is_dir($path)) {
                    mkdir($path, 0777, true);
                }
            }

            $this->app->useStoragePath($tmp);
            $this->app['config']->set('view.compiled', $tmp.'/framework/views');
            $this->app['config']->set('logging.default', 'errorlog');
            $this->app['config']->set('logging.channels.emergency.path', 'php://stderr');
            $this->app['config']->set('logging.channels.single.path', 'php://stderr');
            $this->app['config']->set('session.driver', 'cookie');
            $this->app['config']->set('cache.default', 'array');
            $this->app['config']->set('queue.default', 'sync');
            $this->app['config']->set('app.maintenance.driver', 'file');
            $this->app['config']->set('app.maintenance.store', 'array');
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
