<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DumpCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:dump';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dump the sql file';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('migrate:reset', ['--force' => true]);
        Schema::dropIfExists('migrations');
        try {
            $sql = base_path('database/sql/dump.sql');
            DB::unprepared(file_get_contents($sql));
            $this->info('Successful import from database/sql/dump.sql');
        } catch (Exception $e) {
            $this->warn('Failed import from database/sql/dump.sql' . PHP_EOL . 'Exception: ' . $e->getMessage());
        }
    }
}
