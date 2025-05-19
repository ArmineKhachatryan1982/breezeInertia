<?php

namespace App\Providers;

use App\Interface\AparatInterface;
use App\Interface\BaseInterface;
use App\Interface\ServiceDetailsInterface;
use App\Interface\StoreInterface;
use App\Interface\SubscriberInterface;
use App\Repositories\AparatRepository;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\ServiceDetailsRepository;
use App\Repositories\StoreRepository;
use App\Repositories\SubscriberRepository;
use App\Services\ServiceDetailsService;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ServiceDetailsInterface::class, ServiceDetailsRepository::class);
        $this->app->bind(BaseInterface::class, BaseRepository::class);
        $this->app->bind(AparatInterface::class, AparatRepository::class);
        $this->app->bind(SubscriberInterface::class,SubscriberRepository::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::prefetch(concurrency: 3);
    }
}
