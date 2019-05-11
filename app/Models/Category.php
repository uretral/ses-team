<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTreeMenu;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ModelTreeMenu, AdminBuilder;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setParentColumn('parent');
        $this->setOrderColumn('sort');
        $this->setTitleColumn('name');
        $this->setLinkColumn('link');
    }

    public static function updateSource($model, $blockAlias, $class)
    {
        $tbl = Category::where('id', $model->parent)->first();
        $block = Block::where('url', $blockAlias)->first();
        $newEl = array(
            'id' => $model->id,
            'nr' => $model->nr,
            'url' => $block->url,
            'name' => $block->name,
            'controller' => $class,
            'model' => $block->model,
            'title' => $model->name,
            'static' => $model->static
        );
        $json = $tbl->source;

        if ($json && strpos($json, $model->nr)) {
            $source = $json;
        } elseif ($json) {
            $arJson = json_decode($json);
            array_push($arJson, (object)$newEl);
            $source = json_encode($arJson, JSON_UNESCAPED_UNICODE);
        } else {
            $source = '[' . json_encode((object)$newEl, JSON_UNESCAPED_UNICODE) . ']';
        }

        Category::where('id', $model->parent)
            ->update(['source' => $source]);

        return redirect('/admin/categories/' . $model->parent . '/edit');
    }

    public static function rootSearch($data, $key, &$links = [])
    {
        if($data[$key]['parent'] == 0) {
            $links[] = str_replace('//','/','/'.$data[$key]['alias']);
        } else {
            $links[] = str_replace('//','/','/'.$data[$key]['alias']);
            self::rootSearch($data, $data[$key]['parent'], $links);
        }
        return $links;
    }
    public static function root($id)
    {
        $arAlias = self::rootSearch(Category::all()->keyBy('id')->toArray(), $id);
        return str_replace('//','/',implode('',array_reverse($arAlias)));
    }
    public static function list(){
        $menu = [];
        foreach (self::all()->toArray() as $i)
        {

            $menu[$i['id']] = $i;
            $menu[$i['id']]['d'] = request()->path();
            $pos = strpos(request()->getPathInfo(),$i['link']);
            strpos(request()->getPathInfo(),$i['link']) !== false ? $menu[$i['id']]['active'] = 'active' : $menu[$i['id']]['active'] = '';
        }
        return $menu;
    }

    public static function item($id){
        return self::where('id',$id)->first();
    }
    public static function items(){
        return self::all();
    }


}


