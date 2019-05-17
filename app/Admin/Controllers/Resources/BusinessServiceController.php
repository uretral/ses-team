<?php

namespace App\Admin\Controllers\Resources;

use App\Models\Resources\Branch;
use App\Models\Resources\BusinessService;
use App\Http\Controllers\Controller;
use App\Models\Resources\BusinessServiceCategory;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class BusinessServiceController extends Controller
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
        $grid = new Grid(new BusinessService);

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
        $show = new Show(BusinessService::findOrFail($id));

        $show->id('ID');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BusinessService);

        $form->tab('Настройки', function(Form $form){
            $form->display('id');
            $form->select('parent', 'Родитель')->options(BusinessServiceCategory::all()->pluck('name','id'));
            $form->alias('alias');
            $form->text('name','Название')->attribute('rel','alias');
            $form->number('sort', 'Сортировка')->default(10);
        });
        $form->tab('Контент', function(Form $form){
            $form->switch('popular', 'Добавить в популяные в меню');
            $form->switch('left_col', 'Слева');
            $form->switch('right_col', 'Справа');
            $form->textarea('intro');
            $form->ckeditor('detail');
            $form->image('img');
        });
        $form->tab('Дополнительно', function(Form $form){
            $form->multipleSelect('branches')->options(Branch::all()->pluck('name','id'));
            $form->ckeditor('price');
            $form->ckeditor('warranty');
        });
        $form->tab('Методы', function(Form $form){
            $form->hasMany('methods', function (Form\NestedForm $form){
                $form->text('name');
                $form->textarea('text');
            });
        });
        $form->tab('SEO', function(Form $form){
            $form->textarea('seo_title','seo title');
            $form->textarea('seo_desc','seo description');
            $form->textarea('seo_key','seo keywords');

        });


        return $form;
    }

    public function content($alias){
        $data = BusinessService::where('alias',$alias)->firstOrFail();
        return view('test.index',[
            'data' => $data,
            'backend' => ''
        ]);
    }
}
