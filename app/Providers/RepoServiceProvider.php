<?php

namespace App\Providers;

use App\Http\Service\FacultyServices\ListFacultyService;
use App\http\Service\ServicesInterface\ListFacultyServiceInterface;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ListFacultyServiceInterface::class,ListFacultyService::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
