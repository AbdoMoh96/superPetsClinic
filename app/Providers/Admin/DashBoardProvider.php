<?php

namespace App\Providers\Admin;

use App\Interfaces\Admin\AboutInterface;
use App\Interfaces\Admin\AppointmentInterface;
use App\Interfaces\Admin\ContactInterface;
use App\Interfaces\Admin\MailInterface;
use App\Interfaces\Admin\OrderInterface;
use App\Interfaces\Admin\ProductInterface;
use App\Interfaces\Admin\SettingsInterface;
use App\Repositories\Admin\AboutRepository;
use App\Repositories\Admin\AppointmentsRepository;
use App\Repositories\Admin\ContactRepository;
use App\Repositories\Admin\MailRepository;
use App\Repositories\Admin\OrderRepository;
use App\Repositories\Admin\ProductRepository;
use App\Repositories\Admin\SettingsRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Admin\SlidersRepository;
use App\Interfaces\Admin\SlidersInterface;

class DashBoardProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        app()->bind(SlidersInterface::class , SlidersRepository::class);
        app()->bind(AboutInterface::class , AboutRepository::class);
        app()->bind(ContactInterface::class , ContactRepository::class);
        app()->bind(MailInterface::class , MailRepository::class);
        app()->bind(SettingsInterface::class , SettingsRepository::class);
        app()->bind(AppointmentInterface::class , AppointmentsRepository::class);
        app()->bind(ProductInterface::class , ProductRepository::class);
        app()->bind(OrderInterface::class , OrderRepository::class);
    }
}
