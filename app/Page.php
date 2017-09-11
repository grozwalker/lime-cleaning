<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'slug',
        'meta_title',
        'page_title',
        'description',
        'keyword',
        'content',
    ];
}
