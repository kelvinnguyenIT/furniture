<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminGeneratorCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin CRUD';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('name');
        $this->call('make:model', ['name' => 'Models\\' . $name, '-m' => true]);
        $this->call('make:controller', ['name' => 'Admin\\' . $name . 'Controller', '--model' => 'Models\\' . $name]);
        $this->call('make:request', ['name' => $name . 'Request']);
        $this->call('make:observer', ['name' => $name . 'Observer', '--model' => 'Models\\' . $name]);
        $this->call('make:rule', ['name' => $name . 'Rule']);
        $this->call('make:view', ['name' => $name]);

        File::append(base_path('routes/web.php'), 'Route::resource(\'/admin/' . Str::kebab($name) . '\', \'Admin\\\\' . $name . 'Controller\');');
    }

    /**
     * Get stub.
     *
     * @return string|void
     */
    protected function getStub()
    {
        //
    }
}
