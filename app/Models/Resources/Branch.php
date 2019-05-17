<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'resource_branches';

    public function getPartnersAttribute($value)
    {
        return explode(',', $value);
    }

    public function setPartnersAttribute($value)
    {
        $this->attributes['partners'] = implode(',', $value);
    }

    public function getArticlesAttribute($value)
    {
        return explode(',', $value);
    }

    public function setArticlesAttribute($value)
    {
        $this->attributes['articles'] = implode(',', $value);
    }

    public function getClientsAttribute()
    {
        return Client::find($this->getAttribute('partners'));
    }

    public function getArtAttribute()
    {
        return Client::find($this->getAttribute('articles'));
    }


    /*    public static function block($data,$b){
            return view('test.index',[
                'data' => $data->helpers,
                'backend' => $b
            ]);
        }*/


}
