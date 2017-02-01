<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index()
    {
        $orders = Order::where('approved', 0)
            ->orderBy('id', 'desc')
            ->paginate(20);

        return view('admin.main.index', compact('orders'));
    }
}
