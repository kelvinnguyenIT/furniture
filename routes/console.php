<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('dump', function () {
    Artisan::call('migrate:reset', ['--force' => true]);
    Schema::dropIfExists('migrations');
    try {
        $sql = base_path('database/sql/dump.sql');
        DB::unprepared(file_get_contents($sql));
        $this->comment('Finish import from database/sql/dump.sql');
    } catch (Exception $e) {
        $this->comment('Failed import from database/sql/dump.sql');
    }
});
