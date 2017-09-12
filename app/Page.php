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
        'is_published',
    ];


    public function getExcerptAttribute()
    {
        $content = strip_tags($this->content);
        $content = substr($content, 0, 300);
        $content = rtrim($content, "!,.-");
        $content = substr($content, 0, strrpos($content, ' '));

        return $content . ' ...';
    }
}
