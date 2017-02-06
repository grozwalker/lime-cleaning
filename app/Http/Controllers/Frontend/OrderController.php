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
use Mail;

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

        /**
         * Блок сбора доп опций уборки
         */
        switch ($request->cleantype) {
            case 1:
            case 2:
            case 3:
                $cleanType = "";

                if ( $request->rooms_number ) {
                    $cleanType .= "<li>Количество комнат: $request->rooms_number</li>";
                }

                if ( $request->bathroom_number ) {
                    $cleanType .= "<li>Санузлов : $request->bathroom_number</li>";
                }

                break;
            case 4:
                $cleanType = "";
                if ( $request->area ) {
                    $cleanType .= "<li>Площадь помещения: $request->area</li>";
                }
                break;

            default:
                $cleanType = '';
        }

        $additionalFields = $request->additional_fields;

        $fieldArray = explode(';', substr($additionalFields , 0, -1));
        $AdditionalArr = [];

        $addServices = [
            'fridge' => [
                'description' => 'Помыть холодильник',
                'value' => false,
            ],
            'oven' => [
                'description' => 'Помыть духовку',
                'value' => false,
            ],
            'svch' => [
                'description' => 'Почистить СВЧ',
                'value' => false,
            ],
            'cupboard' => [
                'description' => 'Убрать в кухонных шкафах',
                'value' => false,
            ],
            'dishes' => [
                'description' => 'Помыть посуду',
                'value' => false,
            ],
            'chandelier' => [
                'description' => 'Мойка люстры',
                'value' => false,
            ],
            'ironing' => [
                'description' => 'Погладить белье',
                'value' => true,
            ],
            'window' => [
                'description' => 'Помыть окна',
                'value' => true,
            ],
            'key' => [
                'description' => 'Доставка ключей',
                'value' => true,
            ],
            'balcony' => [
                'description' => 'Убраться на балконе',
                'value' => false,
            ],
            'extract' => [
                'description' => 'Мойка вытяжки',
                'value' => false,
            ],
            'blinds' => [
                'description' => 'Стирка штор',
                'value' => false,
            ],
            'wardrobe' => [
                'description' => 'Убрать в гардеробе',
                'value' => false,
            ],
            'repair-square' => [
                'description' => 'Площадь помещения',
                'value' => true,
            ],
            'carpet-square' => [
                'description' => 'Площадь ковра',
                'value' => true,
            ],
            'sofa' => [
                'description' => 'Посадочных мест на диване',
                'value' => true,
            ],
            'chair' => [
                'description' => 'Количество кресел',
                'value' => true,
            ],
            'matrasses' => [
                'description' => 'Количество матрасов',
                'value' => true,
            ],
            'passenger' => [
                'description' => 'Легковая машина',
                'value' => false,
            ],
            'suv' => [
                'description' => 'Внедорожник',
                'value' => false,
            ],
            'minibus' => [
                'description' => 'Микроавтобус',
                'value' => false,
            ],
            'leaf-count' => [
                'description' => 'Количество створок',
                'value' => true,
            ],
            'balcony-count' => [
                'description' => 'Количество балконов',
                'value' => true,
            ],
        ];

        $subService = '';

//Разбираем доп поля, только если они переданы
        if ( strlen($additionalFields) > 0 ) {
            foreach ($fieldArray as $field) {
                $tempArr = explode(':', $field);
                $AdditionalArr[$tempArr[0]] = $tempArr[1];
            }

            //$subService = '<h2>Дополнительные услуги</h2>';

            foreach ($AdditionalArr as $service => $value) {
                foreach ($addServices as $name => $desc) {

                    if ($service == $name) {
                        $subService .= $desc['description'];

                        if ($desc['value']) {
                            $subService .= ': ' . $value;
                        }
                        $subService .= '<br>';
                        break;
                    }

                }
            }
        }

        $additionalInfo = "";
        if ( $cleanType && $cleanType != "" ) {
            $additionalInfo .= "<ul>$cleanType</ul>";
        }

        if ( $subService != "" ) {
            $additionalInfo .= $subService;
        }


        /******************************/

        $order = new Order();
        $order->profile_id = $profile->id;
        $order->service_id = $request->cleantype;
        $order->subservice_id = $request->cleaning_sort;
        $order->additional_info = $additionalInfo;
        $order->cleaning_time = Carbon::createFromFormat('d.m.y', date($request->clean_date))->format('Y-m-d');


        if ($order->save()){

            $emailData = [
                'cleaningType' => $order->service->name,
                'cleaningName' => $order->subservice->name,
                'cleaningDate' => $order->cleaning_time,
                'userPhone' => $order->profile->phone,
                'additionalInfo' => $additionalInfo,
            ];

            Mail::send('email.mailOrder', $emailData, function($message)
            {
                $message->from('order@lime-cleaning.ru', 'Lime-Cleaning');

                $message->to('lime-cleaning@yandex.ru')->cc('andrey_groza@mail.ru')->subject('Резюме на уборку');
            });

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
