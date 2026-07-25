<?php

namespace Sanwo\Laravel;

use Illuminate\Support\ServiceProvider;

class SanwoServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sanwo.php', 'sanwo');

        $this->app->singleton(SanwoManager::class, function ($app) {
            return new SanwoManager($app['config']['sanwo']);
        });
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sanwo');

        $this->loadViewComponentsAs('sanwo', [
            'checkout' => \Sanwo\Laravel\View\Components\Checkout::class,
            'custom-amount' => \Sanwo\Laravel\View\Components\CustomAmount::class,
            'scripts' => \Sanwo\Laravel\View\Components\Scripts::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/sanwo.php' => config_path('sanwo.php'),
            ], 'sanwo-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/sanwo'),
            ], 'sanwo-views');
        }
    }
}
