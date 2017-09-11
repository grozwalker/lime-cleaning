<?php

namespace App\Http\Controllers\Frontend;

use App\Page;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $pages = Page::whereIsPublished(1)->get();

        return view('frontend.blog.index', compact('pages'));
    }
}
