<?php

namespace Larasetups;

use Larasetups\Command\Bootstrap5Command;
use Illuminate\Support\ServiceProvider;
use Larasetups\Command\Vue2Command;
use Larasetups\Command\BootstrapVue2Command;
use Larasetups\Command\BootstrapVue3Command;
use Larasetups\Command\Vue3Command;

class LarasetupServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Vue2Command::class,
                Vue3Command::class,
                Bootstrap5Command::class,
                BootstrapVue2Command::class,
                BootstrapVue3Command::class
            ]);
        }
    }
}
