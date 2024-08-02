<?php

namespace App\Providers;

use app\Http\Service\FacultyServices\AdvanceListFacultyService;
use App\Http\Service\FacultyServices\ListFacultyService;
use App\Http\Service\ServicesInterface\ListFacultyServiceInterface;
use Illuminate\Support\ServiceProvider;

class FacultyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ListFacultyServiceInterface::class,AdvanceListFacultyService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }
}
