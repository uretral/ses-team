<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    protected $table = 'resource_tims';

    public function getManyAttribute($value)
    {
        return explode(',', $value);
    }

    public function setManyAttribute($value)
    {
        $this->attributes['many'] = implode(',', $value);
    }

    public function getBlaAttribute()
    {
        return Client::find($this->getAttribute('many'));
    }


    public static function index()
    {
        return view('blocks.breadcrumbs');
    }
}
