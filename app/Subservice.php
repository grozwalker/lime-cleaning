<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subservice extends Model
{
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
