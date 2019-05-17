<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Resources\BusinessService
 *
 * @property int $id
 * @property int $parent
 * @property string $alias
 * @property string $name
 * @property string|null $intro
 * @property int $sort
 * @property string|null $detail
 * @property string|null $img
 * @property int|null $popular
 * @property int|null $left_col
 * @property int|null $right_col
 * @property string|null $branches
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Resources\BusinessServicesMethod[] $methods
 * @property string|null $price
 * @property string|null $warranty
 * @property string|null $seo_title
 * @property string|null $seo_desc
 * @property string|null $seo_key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereBranches($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereLeftCol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereMethods($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService wherePopular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereRightCol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereSeoDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resources\BusinessService whereWarranty($value)
 * @mixin \Eloquent
 */
class BusinessService extends Model
{
    protected $table = 'resource_business_services';

    public function methods(){
        return $this->hasMany(BusinessServicesMethod::class,'parent');
    }

/*    public static function block($data,$b){
        return view('test.index',[
            'data' => $data->helpers,
            'backend' => $b
        ]);
    }*/


}
