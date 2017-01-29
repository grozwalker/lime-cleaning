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

    /**
     * Сохраняет пользователя и заказ
     * @param Request $request
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'user_phone' => 'required|max:100',
            'clean_date' => 'required|max:100',
        ]);

        /**
         * Сохраняем вначале пользователя (Нужна проверка есть ли такой человек)
         * @var  $profile */
        $userPhone = preg_replace('/[^0-9]/', '', $request->user_phone);

        $profile = Profile::where('phone', $userPhone)->first();

        if ( !$profile ){
            $profile = new Profile();
            $profile->phone = $userPhone;
            $profile->save();
        }

        $order = new Order();
        $order->profile_id = $profile->id;
        $order->service_id = $request->cleantype;
        $order->subservice_id = $request->cleaning_sort;
        $order->cleaning_time = Carbon::createFromFormat('d.m.y', date($request->clean_date))->format('Y-m-d');

        if ($order->save()){
            $answear = '<h1>Благодарим за Вашу заявку</h1>';
            $answear .= '<div class="remodal-text">';
            $answear .= '<p>Мы получили вашу заявку и уже занимаемся ее обработкой. Мы Вам перезвоним так быстро, как только сможем.</p>';
            $answear .= '</div>';
            echo $answear;
        } else {
            $error = '<h1 class="danger">Ошибка</h1>';
            $error .= '<div class="remodal-text">';
            $error .= '<p>Приносим свои извинения, у нас на сайте произошла ошибка и мы уже ее исправляем.</p><br>';
            $error .= '<p>Позвоните <a href="tel:+79883888336">+7 988 38 883 36</a>  мы с радостью примем Вашу заявку по телефону</p>';
            $error .= '</div>';
            echo $error;
        }



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
