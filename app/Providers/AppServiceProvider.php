<?php

namespace App\Providers;

use App\Models\Properties;
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
        View::composer('*', function ($view) {

            $user = Auth::user();
            if ($user && $user->role == 'owner') {

                $property = Properties::where('user_id', $user->id)->first();
                $view->with('property', $property);
            } else {
                $view->with('user', null);
            }
        });
    }
}
