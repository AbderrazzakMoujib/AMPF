<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // ✅ AMPF helpers: localeRoute(), langSwitchUrl(), localeUrl()
        require_once app_path('helpers.php');
    }
}
