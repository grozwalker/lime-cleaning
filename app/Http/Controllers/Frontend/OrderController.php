<?php

namespace App\Http\Controllers\Frontend;

use App\Order;
use App\Profile;
use App\Service;
use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class OrderController extends Controller
{
    public function index()
    {
        // Получаем массив временных отрезков работы
        $time = [];
        $hhmm = new DateTime( '8:00' );
        while( $hhmm->format('H:i') < "20:01" )
        {
            //print( $hhmm->format("H:i\n" ) );
            array_push($time, $hhmm->format("H:i" ));
            $hhmm->modify('+30 minutes');
        }

        // Список всех родительских категорий для отображения в листе выбора
        $services = Service::where('parent_id', 0)->lists('name', 'id');

        return view ('frontend.order.index', compact('time', 'services'));
    }

    public function store(Request $request)
    {


        $this->validate($request, [
            'name' => 'required|max:100',
            'phone' => 'required|max:100',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'building' => 'required|max:50',
        ]);

        /**
         * Сохраняем вначале пользователя (Нужна проверка есть ли такой человек)
         * @var  $profile */
        $profile = new Profile();
        $profile->name = $request->name;
        $profile->phone = $request->phone;

        $profile->save();

        /**
         * Сохраняем сам заказ
         * @var  $order */
        $order = new Order();

        $order->service_id = $request->service;
        $order->profile_id = $profile->id;
        $order->city = $request->city;
        $order->street = $request->street;
        $order->building = $request->building;
        $order->user_comment = $request->user_comment;

        $order->save();

        Session::flash('flash_order_create_message', 'Заказ успешно размещен!');


        return redirect()->back();
    }
}
