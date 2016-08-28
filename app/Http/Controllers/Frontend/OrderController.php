<?php

namespace App\Http\Controllers\Frontend;

use App\Order;
use App\Profile;
use App\Service;
use App\Subservice;
use App\Subservice_order;
use Carbon\Carbon;
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
        $key = '';
        $hhmm = new DateTime( '8:00' );
        while( $hhmm->format('H:i') < "20:01" )
        {
            //print( $hhmm->format("H:i\n" ) );
            //array_push($time, $hhmm->format("H:i" ));
            $key = $hhmm->format("H") . $hhmm->format("i");
            $time[$key] = $hhmm->format("H:i");
            $hhmm->modify('+30 minutes');
        }

        // Список всех родительских категорий для отображения в листе выбора
        $services = Service::where('parent_id', 0)->lists('name', 'id');


        // Список доп услуг для первой Услуги (т.к. она выбрана по-умолчанию)
        $firstService = Service::where([
            ['parent_id', 0],
            ['active', true]
        ])->first();

        $subservices = $this->getSubServices($firstService->id);



        return view ('frontend.order.index', compact('time', 'services', 'subservices'));
    }

    public function store(Request $request)
    {

        $cleaningTime = Carbon::createFromFormat('d/m/Y H:i', date('27/08/2016 08:30'))->format('Y-m-d H:i');
        //dd();
        $this->validate($request, [
            'name' => 'required|max:100',
            'phone' => 'required|max:100',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'house' => 'required|max:50',
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
        $order->house = $request->house;
        $order->housing = $request->housing;
        $order->building = $request->building;
        $order->apartment = $request->apartment;
        $order->porch = $request->porch;
        $order->intercom = $request->intercom;
        $order->cleaning_time = Carbon::createFromFormat('d.m.Y H:i', date($request->date . substr_replace($request->time, ':', 2, 0)))->format('Y-m-d H:i');
        $order->user_comment = $request->user_comment;

        $order->save();

        // Созраняем выбранные доп услуги (Если выбраны)
        if ( $request->subservices) {
            foreach ($request->subservices as $subservice) {
                $subserviceOrder = new Subservice_order();
                $subserviceOrder->order_id = $order->id;
                $subserviceOrder->subservice_id = $subservice;
                $subserviceOrder->save();
            }
        }

        Session::flash('flash_order_create_message', 'Заказ успешно размещен!');


        return redirect()->back();
    }

    /**
     * Возвращает список доп услуг для переданной услуги
     *
     * @param $serviceID
     * @return mixed
     */
    public function getSubServices($serviceID)
    {

        return Subservice::where([
            [function($query)  use ($serviceID) {
                $query->where('service_id', $serviceID);
            }],
            ['active', true]
        ])->get();
    }
}
