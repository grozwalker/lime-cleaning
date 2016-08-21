<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name'];

    public function children()
    {
        return $this->hasMany(Service::class, 'parent_id');
    }

    public function subservice()
    {
        return $this->hasMany('App\Subservice');
    }
}
