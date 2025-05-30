<?php

use App\Console\Commands\GenerateRoomSimilarity;
use App\Console\Commands\GenerateSimilarity;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\DB;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('similarity:generate', function () {
    $this->call(GenerateSimilarity::class);
})->purpose('generate')->everyMinute()->withoutOverlapping();

Artisan::command('app:generate-room-similarity', function () {
    $this->call(GenerateRoomSimilarity::class);
})->purpose('generate')->everyMinute()->withoutOverlapping();
