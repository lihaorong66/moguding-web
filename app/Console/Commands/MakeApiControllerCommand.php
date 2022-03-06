<?php

namespace App\Console\Commands;

use Illuminate\Routing\Console\ControllerMakeCommand;

class MakeApiControllerCommand extends ControllerMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:api-controller';

    /**
     * The name of the console command.
     *
     * This name is used to identify the command during lazy loading.
     *
     * @var string|null
     */
    protected static $defaultName = 'make:api-controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new api controller class';

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Controllers\Api';
    }
}
