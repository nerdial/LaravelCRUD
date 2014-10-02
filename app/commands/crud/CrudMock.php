<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Simple CRUD Command for laravel
 *
 * @author Vahid Mahdiun
*/

class CrudMock extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'crud:mock';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Mock for each Model';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $models = explode(",", $this->argument("models"));
        $this->checkDirectory();
        $template = File::get($this->getPath("commands/crud/template/model.crud"));
        foreach ($models as $model) {
            $model = ucwords($model);
            $content = $this->setTemplate($template, $model);
            File::put($this->getPath("mocks/Mock") . $model . ".php", $content);
        }
        $this->response(count($models));
    }

    protected function checkDirectory()
    {
        if (!File::isDirectory($this->getPath("mocks/"))) {
            File::makeDirectory($this->getPath("mocks/"), $mode = 0777, true, true);
        }
    }

    protected function getPath($path)
    {
        return app_path($path);
    }

    protected function setTemplate($template, $model)
    {
        $replace = str_replace("{{MockName}}", "Mock" . $model, $template);
        $replace = str_replace("{{ModelName}}", $model, $replace);
        $replace = str_replace("{{ControllerName}}", $model . "Controller", $replace);
        $replace = str_replace("{{Route}}", strtolower($model).'/', $replace);
        $replace = str_replace("{{RouteIndex}}", strtolower($model).'/', $replace);
        return str_replace("{{ViewName}}", strtolower($model), $replace);
    }

    protected function response($models)
    {
        if ($models > 1)
            $this->line("Mocks where created");
        else
            $this->line("Mock was created");
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('models', InputArgument::REQUIRED, 'set your mock models e.g. crud:mock user,company,category'),
        );
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array();
    }
}
