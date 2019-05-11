<?php

namespace App\Models\Blocks;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public static function block($data,$b){
        return view('blocks.banner',[
            'data' => $data,
            'backend' => $b
        ]);
    }
}
