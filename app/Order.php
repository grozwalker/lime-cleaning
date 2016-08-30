<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function getCleaningTimeAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y H:i');
    }

    public function getAddressAttribute()
    {
        $addressFields = [
            'Улица:' => $this->street,
            'Дом:' => $this->house,
            'кКорпус:' => $this->housing,
            'Строение:' => $this->building,
            'Квартира:' => $this->apartment,
            'Подъезд:' => $this->porch,
            'Домофон:' => $this->intercom,
        ];

        $clearAddressFields = array_filter(
            $addressFields, function($el){
                return !empty($el);
            }
        );

        $address = '';
        foreach ($clearAddressFields as $key => $val)
            $address .= "$key $val, ";

        return $address;
    }
}
