<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminRemoveCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'remove:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove the admin CRUD';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('name');
        File::delete(app_path('Models\\' . $name . '.php'));
        File::delete(app_path('Rules\\' . $name . 'Rule.php'));
        File::delete(app_path('Observers\\' . $name . 'Observer.php'));
        File::delete(app_path('Http\\Requests\\' . $name . 'Request.php'));
        File::delete(app_path('Http\\Controllers\\Admin\\' . $name . 'Controller.php'));
        File::deleteDirectory(resource_path('views\\admin\\' . Str::kebab($name)));
        File::delete(File::glob(database_path('migrations\\*_create_' . Str::snake(Str::pluralStudly(class_basename($name))) . '_table.php')));
    }

    protected function getStub()
    {
        //
    }
}
