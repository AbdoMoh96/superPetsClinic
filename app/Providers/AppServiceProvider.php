<?php

namespace App\Providers;

use App\View\Composers\DashboardComposer;
use App\View\Composers\LandingComposer;
use App\View\Composers\StoreComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        View::composer([
            'components.landing.layout',
            'components.landing.containers.nav',
            'landing.home'
        ] , LandingComposer::class);

        View::composer([
            'components.store.layout',
            'components.store.partials.footer',
            'components.store.partials.social',
            'components.store.containers.nav',
            'components.store.partials.popup',
            'store.home',
            'store.info.contact'
        ] , StoreComposer::class);

        View::composer([
            'components.admin.dashboard.leftNav',
            'dashboard.order.show',
            'dashboard.order.print'
        ] , DashboardComposer::class);
    }
}
