<?php

namespace App\Providers;

use App\Http\Service\ServicesInterface\DeleteStudentServiceInterface;
use App\Http\Service\ServicesInterface\RedirectStudentServiceInterface;
use App\Http\Service\ServicesInterface\StoreStudentInterface;
use App\Http\Service\ServicesInterface\StudentFSelectInterface;
use App\Http\Service\StudentServices\DeleteStudentService;
use App\Http\Service\StudentServices\RedirectStudentService;
use App\Http\Service\StudentServices\StoreStudent;
use App\Http\Service\StudentServices\StudentFSelect;
use Illuminate\Support\ServiceProvider;

class StudentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RedirectStudentServiceInterface::class, RedirectStudentService::class);
        $this->app->bind(StoreStudentInterface::class, StoreStudent::class);
        $this->app->bind(StudentFSelectInterface::class, StudentFSelect::class);
        $this->app->bind(DeleteStudentServiceInterface::class, DeleteStudentService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
