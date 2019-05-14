<?php

namespace App\Models;

use App\Models\Blocks\IconedLink;
use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    protected $guarded = [];

    public function helpers()
    {
        return $this->belongsTo(IconedLink::class, 'parent');
    }
}
