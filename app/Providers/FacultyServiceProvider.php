<?php

namespace App\Providers;
use App\Http\Service\FacultyServices\AdvanceListFacultyService;
use App\Http\Service\FacultyServices\DeleteFacultyService;
use App\Http\Service\FacultyServices\RedirectFacultyService;
use App\Http\Service\FacultyServices\StoreFacultyService;
use App\Http\Service\ServicesInterface\DeleteFacultyServiceInterface;
use App\Http\Service\ServicesInterface\ListFacultyServiceInterface;
use App\Http\Service\ServicesInterface\RedirectFacultyServiceInterface;
use App\Http\Service\ServicesInterface\StoreFacultyServiceInterface;
use Illuminate\Support\ServiceProvider;

class FacultyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ListFacultyServiceInterface::class,AdvanceListFacultyService::class);
        $this->app->bind(RedirectFacultyServiceInterface::class,RedirectFacultyService::class);
        $this->app->bind(StoreFacultyServiceInterface::class,StoreFacultyService::class);
        $this->app->bind(DeleteFacultyServiceInterface::class,DeleteFacultyService::class);
    }


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }
}
