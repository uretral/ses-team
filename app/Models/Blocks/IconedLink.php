<?php

namespace App\Models\Blocks;

use App\Models\Helper;
use Illuminate\Database\Eloquent\Model;

class IconedLink extends Model
{
    protected $table = 'block_iconed_links';

    public function helpers()
    {
        return $this->hasMany(Helper::class,'parent');
    }

    public static function block($data,$b){
        return view('blocks.iconed_link',[
            'data' => $data->helpers,
            'backend' => $b
        ]);
    }
}
