<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Resources\BusinessServiceCategory
 *
 * @property int $id
 * @property int $sort
 * @property string $alias
 * @property string $name
 * @property int|null $main
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessServiceCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessServiceCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessServiceCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessServiceCategory whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessServiceCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessServiceCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessServiceCategory whereMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessServiceCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessServiceCategory whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessServiceCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BusinessServiceCategory extends Model
{
    protected $table = 'resources_business_service_categories';

/*    public static function block($data,$b){
        return view('test.index',[
            'data' => $data->helpers,
            'backend' => $b
        ]);
    }*/


}
