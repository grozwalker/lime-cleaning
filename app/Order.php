<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function getCleaningTimeAttribute ($value)
    {
        return Carbon::parse($value)->format('d-m-Y H:i');;
    }
}
