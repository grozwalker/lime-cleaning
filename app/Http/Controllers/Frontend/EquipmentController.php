<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EquipmentController extends Controller
{
    public function index()
    {
        return view('frontend.pages.equipment');
    }
}
