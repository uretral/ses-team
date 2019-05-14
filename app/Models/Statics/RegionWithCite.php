<?php

namespace App\Models\Statics;

use Illuminate\Database\Eloquent\Model;

class RegionWithCite extends Model
{
//    protected $table = 'block_region_with_cite';

    public static function block($data,$b){
        return view('blocks.region_with_cite',[ // region_with_cite
            'data' => $data,
            'backend' => $b
        ]);
    }
}
