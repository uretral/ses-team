<?php

namespace App\Models\HasMany;

use App\Models\Resources\HomeService;
use Illuminate\Database\Eloquent\Model;

class HomeServicesAcc extends Model
{
    protected $table = 'hasmany_home_services_acc';

    public function steps()
    {
        return $this->belongsTo(HomeService::class, 'parent');
    }

/*    public static function block($data,$b){
        return view('test.index',[
            'data' => $data->helpers,
            'backend' => $b
        ]);
    }*/


}
