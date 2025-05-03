<?php

namespace App\Providers;

use App\Console\Commands\GenerateSimilarity;
use App\Models\Properties;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    
    }

    protected $commands = [
        GenerateSimilarity::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('generate:similarity')->cron('*/2 * * * *');
    }
}
