<?php

namespace App\Http\Controllers\Frontend;

use App\Staff;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    public function index()
    {
        $yearList = [];
        $endYear = Date('Y') - 18;


        for ($i = 1950; $i <= $endYear; $i++){
            array_unshift($yearList, $i);
        }

        return view('frontend.pages.work', compact('yearList'));
    }

    public function store(Request $request)
    {
        $staffPhone = preg_replace('/[^0-9]/', '', $request->user_phone);
        $staff = Staff::Where('phone', $staffPhone)->first();

        if ( !$staff ){
            $staff = new Staff();

            $staff->fio = $request->user_name;
            $staff->phone = $staffPhone;
            $staff->citizen = $request->citizen;
            $staff->age = $request->age;

            $staff->save();

            return 'Спасибо за обращение. мы свяжемся с Вами в ближайшее время';
        } else {
            return 'Вы уже подавлаи заявку. Мы свяжемся с Вами в ближайшее время.';
        }
    }
}
