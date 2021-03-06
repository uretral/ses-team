<?php

namespace App\Admin\Controllers\Blocks;

use App\Models\Blocks\IconedLink;
use App\Http\Controllers\Controller;
use App\Models\Helper;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use App\Models\Category;
use Illuminate\Support\Facades\Request;
use PhpParser\Node\Expr\PostDec;

class IconedLinkController extends Controller
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
        $grid = new Grid(new IconedLink);

        $grid->id('ID');
        $grid->name('Название');
        //$grid->intro_img('Превью');
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
        $show = new Show(IconedLink::findOrFail($id));

        $show->id('ID');
        $show->name('name');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        if($_POST['_method'] == 'delete') {
            dump(\request());
            exit();
        }

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new IconedLink);


        $form->tab('Контент', function ($form) {
            $form->hasMany('helpers', function (Form\NestedForm $form) {

                $form->text('hook')->attribute(['readonly' => 'readonly'])->value(\request()->get('parent'));
                $form->text('name', 'Имя');
                $form->image('img', 'Иконка')->uniqueName();
                $form->text('link', 'Ссылка');
            });

        });

        $form->tab('Настройки', function ($form) {
            $form->display('id', 'ID');
            $form->text('nr')->default(Request::get('nr'));
            $form->text('parent')->default(Request::get('parent'));
            $form->text('name', 'Название');
            $form->image('rr', 'Название');
        });



            if (request()->get('helpers')) {

                function setFile($arFile){
                    foreach ($arFile as $key => $f) {
                        $filename = md5(uniqid()).'.'.$f->getClientOriginalExtension();
                        $f->move(storage_path('/app/public/images'), $filename);
                        return [$key => 'images/'.$filename];
                    }
                }

                function fillHelper($ar, $id)
                {
                    foreach ($ar as $k => $i) {
                        $i['parent'] = $id;
                        if (is_numeric($k)) {

                            if ($i['_remove_']) {
                                // remove
                                Helper::destroy($k);
                            } else {
                                // update
                                if(request()->file('helpers') && key_exists($k,request()->file('helpers'))){
                                    $i +=  setFile(request()->file('helpers')[$k]);
                                }

                                Helper::find($k)->update($i);

                            }
                        } else {
                            if ($i['_remove_'] == '0') {
                                // add
                                unset($i['id']);
                                if(request()->file('helpers') && key_exists($k,request()->file('helpers'))){
                                    $i +=  setFile(request()->file('helpers')[$k]);
                                }
                                Helper::create($i);
                            }
                        }
                    }

                }

                $exceptions = ['helpers', '_token', '_method'];

                $tbl = IconedLink::where('id', \request()->segment(4));

                $tblData = [];

                foreach ($_POST as $key => $t) if (!in_array($key, $exceptions)) {
                    $tblData[$key] = $t;
                }
                if ($tbl->first()) { // update
                    $tbl->update($tblData);
                    fillHelper($_POST['helpers'], \request()->segment(4));
                } else { // add
                    $tbl->fill($tblData)->save();
                    $newID = $tbl->id;
                    fillHelper($_POST['helpers'], $newID);
                }

                $form->saved(function (Form $form) {
                    return Category::updateSource($form->model(), \request()->segment(3), get_class($this));
                });

            } else {
                $form->saved(function (Form $form) {
                    return Category::updateSource($form->model(), \request()->segment(3), get_class($this));
                });
            }

        return $form;
    }
}
