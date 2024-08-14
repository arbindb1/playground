<?php

namespace App\Providers;

use App\Http\Service\ServicesInterface\TrashDeleteServiceInterface;
use App\Http\Service\ServicesInterface\TrashListServiceInterface;
use App\Http\Service\TrashServices\TrashDeleteService;
use App\Http\Service\TrashServices\TrashListService;
use Illuminate\Support\ServiceProvider;

class TrashServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(TrashListServiceInterface::class,TrashListService::class);
        $this->app->bind(TrashDeleteServiceInterface::class,TrashDeleteService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
