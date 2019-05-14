<?php

namespace App\Models\Blocks;

use Illuminate\Database\Eloquent\Model;

class HalfWithText extends Model
{
    protected $table = 'block_half_with_texts';

    public static function block($data,$b){
        return view('blocks.half_with_text',[
            'data' => $data,
            'backend' => $b
        ]);
    }
}
