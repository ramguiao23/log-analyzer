<?php

namespace Rmhl\LogAnalyzer;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LogAnalyzerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings and dependencies.
     */
    public function register(): void
    {
        $this->app->singleton(LogAnalyzerPackage::class, function ($app) {
            return new LogAnalyzerPackage(config('services.openai.api_key', env('OPENAI_API_KEY')));
        });
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {

        $this->registerMigrations();
        $this->registerSeeders();

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'log-analyzer');

        Blade::component('log-analyzer', \Rmhl\LogAnalyzer\View\Components\LogAnalyzerComponent::class);
    }

    /**
     * Register and publish migrations.
     */
    protected function registerMigrations(): void
    {
        $migrationPath = __DIR__ . '/../database/migrations';

        if (is_dir($migrationPath)) {
            // Let Laravel automatically load migrations
            $this->loadMigrationsFrom($migrationPath);

            // Also allow users to publish them
            $this->publishes([
                $migrationPath => database_path('migrations'),
            ], 'log-analyzer-migrations');
        }
    }

    /**
     * Register and publish seeders.
     */
    protected function registerSeeders(): void
    {
        $seederPath = __DIR__ . '/../database/seeders';

        if (is_dir($seederPath)) {
            $this->publishes([
                $seederPath => database_path('seeders'),
            ], 'log-analyzer-seeders');
        }
    }
}
