<?php

namespace Encore\Admin\Helpers\Scaffold;

use App\Models\Block;
use App\Models\Resource;
use Illuminate\Http\Request;

class ControllerCreator
{
    /**
     * Controller full name.
     *
     * @var string
     */
    protected $name;


    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * ControllerCreator constructor.
     *
     * @param string $name
     * @param null   $files
     */
    public function __construct($name, $files = null)
    {
        $this->name = $name;

        $this->files = $files ?: app('files');
    }


    /**
     * Create a controller.
     *
     * @param string $model
     *
     * @throws \Exception
     *
     * @return string
     */
    public function create($model)
    {
        $path = $this->getpath($this->name);

        if ($this->files->exists($path)) {
            throw new \Exception("Controller [$this->name] already exists!");
        }

        $stub = $this->files->get($this->getStub());

        $this->files->put($path, $this->replace($stub, $this->name, $model));

        return $path;
    }

    /**
     * @param string $stub
     * @param string $name
     * @param string $model
     *
     * @return string
     */
    protected function replace($stub, $name, $model)
    {
        $stub = $this->replaceClass($stub, $name);

        return str_replace(
            ['DummyModelNamespace', 'DummyModel'],
            [$model, class_basename($model)],
            $stub
        );
    }

    /**
     * Get controller namespace from giving name.
     *
     * @param string $name
     *
     * @return string
     */
    protected function getNamespace($name)
    {
        return trim(implode('\\', array_slice(explode('\\', $name), 0, -1)), '\\');
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param string $stub
     * @param string $name
     *
     * @return string
     */
    protected function replaceClass($stub, $name)
    {
        $class = str_replace($this->getNamespace($name).'\\', '', $name);

        return str_replace(['DummyClass', 'DummyNamespace'], [$class, $this->getNamespace($name)], $stub);
    }

    /**
     * Get file path from giving controller name.
     *
     * @param $name
     *
     * @return string
     */
    public function getPath($name)
    {
        $segments = explode('\\', $name);

        array_shift($segments);

        return app_path(implode('/', $segments)).'.php';
    }

    /**
     * Get stub file path.
     *
     * @return string
     */
    public function getStub()
    {
        $name = $_POST['table_mode'];

        if($name == 'block_controller' || $name == 'block_hasmany'){
           $block = new Block;
            $block->controller = substr($_POST['controller_name'], 22);
            $block->model = $_POST['model_name'];
            $block->name = $_POST['block_name'];
            $block->url = $_POST['block_alias'];
            $block->save();
        } elseif ($name == 'resource_controller') {
            $block = new Resource;
            $block->controller = substr($_POST['controller_name'], 22);
            $block->model = $_POST['model_name'];
            $block->name = $_POST['block_name'];
            $block->alias = $_POST['block_alias'];
            $block->save();
        }


        return __DIR__.'/stubs/'.$name.'.stub';
    }
}
