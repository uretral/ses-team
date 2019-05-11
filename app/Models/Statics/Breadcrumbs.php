<?php

namespace App\Models\Statics;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Breadcrumbs extends Model
{
    public static function block($data,$b){


        $root = explode('/',Category::root($data));
        $arLink = [];
        foreach ($root as $key => $items){

            $res = Category::where('alias',$items)->first();
            if($res) {
                if($key == count($root) - 1) {
                    $arLink['last'] = $res['name'];
                } else {
                    $arLink[$res['link']] = $res['name'];
                }
            }
        }
        return view('blocks.breadcrumbs',[
            'data' => $arLink,
            'backend' => $b
        ]);
    }
}
