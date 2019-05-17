<?php

namespace App\Admin\Controllers\Resources;

use App\Models\Resources\Library;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class LibraryController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Library);

        $grid->id('ID');
        $grid->name('Название');
        $grid->sort('Сортировка');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Library::findOrFail($id));

        $show->id('ID');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Library);

        $form->tab('Настройки', function($form){
            $form->display('ID');
            $form->alias('alias');
//          $form->select('parent');
            $form->text('name','Название')->attribute('rel','alias');
            $form->number('sort')->default(10);
        });
        $form->tab('Превью', function($form){

            $form->image('intro_img','Иконка');
            $form->textarea('introtext','Интро текст');
        });
        $form->tab('Контент', function($form){
            $form->image('img','Картинка');
            $form->ckeditor('content','Текст');
        });
        $form->tab('SEO', function($form){
            $form->textarea('seo_title','seo title');
            $form->textarea('seo_desc','seo description');
            $form->textarea('seo_key','seo keywords');

        });


        return $form;
    }

    public function content($alias){
        $data = Library::where('alias',$alias)->firstOrFail();
        return view('test.index',[
            'data' => $data,
            'backend' => ''
        ]);
    }
}
