<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Resources\Client
 *
 * @property int $id
 * @property int $sort
 * @property int $parent
 * @property string $alias
 * @property int|null $main
 * @property string|null $name
 * @property string|null $intro
 * @property string|null $text
 * @property string|null $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client whereIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client whereMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\Client whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Client extends Model
{
    protected $table = 'resource_clients';

/*    public static function block($data,$b){
        return view('test.index',[
            'data' => $data->helpers,
            'backend' => $b
        ]);
    }*/


}
