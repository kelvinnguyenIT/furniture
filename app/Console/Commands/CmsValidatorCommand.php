<?php

namespace App\Console\Commands;

use App\Services\CmsService;
use Exception;
use Illuminate\Console\Command;

class CmsValidatorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'validate:cms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Validate unique data-cms attribute in all .blade.php file';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $errorList = app()->make(CmsService::class)->validate();
            $this->warn('Duplicate data-cms: ' . json_encode($errorList->get('duplicate')));
            $this->warn('Content without tag: ' . json_encode($errorList->get('noTag')));
        } catch (Exception $e) {
            $this->warn('Validate data-cms failed' . PHP_EOL . "Exception: " . $e->getMessage());
        }
    }

    protected function getStub()
    {
        // NOP
    }
}
