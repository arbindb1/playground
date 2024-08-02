<?php

namespace App\Providers;

use App\Http\Service\FacultyServices\ListFacultyService;
use App\Http\Service\FacultyServices\StoreFacultyService;
use App\http\Service\ServicesInterface\StoreFacultyServiceInterface;
use App\Http\Service\FacultyServices\AdvanceStoreFacultyService;
use App\Http\Service\ServicesInterface\ListFacultyServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
