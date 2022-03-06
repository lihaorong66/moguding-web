<?php

namespace App\Console\Commands;

use Illuminate\Routing\Console\ControllerMakeCommand;

class WebControllerMakeCommand extends ControllerMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:web-controller';

    /**
     * The name of the console command.
     *
     * This name is used to identify the command during lazy loading.
     *
     * @var string|null
     */
    protected static $defaultName = 'make:web-controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new web controller class';

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Controllers\Web';
    }
}
