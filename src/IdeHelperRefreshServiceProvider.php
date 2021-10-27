<?php

namespace Demian2921\IdeHelperRefresh;

use Illuminate\Support\ServiceProvider;
use Demian2921\IdeHelperRefresh\Console\IdeHelperRefreshCommand;

class IdeHelperRefreshServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                                IdeHelperRefreshCommand::class,
                            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }
}
