<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $currentDate = date("d.m.y");
        return view('frontend.pages.index', compact('currentDate'));
    }
}
