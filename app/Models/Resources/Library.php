<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Resources\Library
 *
 * @property int $id
 * @property string|null $alias
 * @property int|null $parent
 * @property int|null $sort
 * @property string|null $name
 * @property string|null $intro_img
 * @property string|null $introtext
 * @property string|null $img
 * @property string|null $content
 * @property string|null $seo_title
 * @property string|null $seo_desc
 * @property string|null $seo_key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereIntroImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereIntrotext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereSeoDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Library whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Library extends Model
{
    protected $table = 'resource_libraries';

/*    public static function block($data,$b){
        return view('test.index',[
            'data' => $data->helpers,
            'backend' => $b
        ]);
    }*/


}
