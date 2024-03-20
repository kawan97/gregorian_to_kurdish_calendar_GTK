<?php

namespace Kawan\GTK;

use Illuminate\Support\ServiceProvider;

class GtkServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // if (File::exists(__DIR__ . '/helpers.php')) {
        //     require __DIR__ . '/helpers.php';
        // }
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'gtk');

    }

    public function register()
    {
        // if (File::exists(__DIR__ . '/helpers.php')) {
        //     require __DIR__ . '/helpers.php';
        // }
    }
}
