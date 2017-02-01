<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\Profile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')
            ->paginate(20);

        return view('admin.order.index', compact('orders'));
    }

    public function view(Order $order)
    {
        return view('admin.order.view', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $this->validate($request, [
            'manager_comment' => 'max:255',
        ]);

        $order->manager_comment = $request->manager_comment;
        $order->approved = $request->approved == 1 ? true : false;

        $order->save();

        Session::flash('flash_order_update_message', 'Заказ успешно обновлен!');

        return redirect('admin/orders');
    }

}
