<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class EmailController extends Controller
{
    public function index()
    {
        $title = 'test';
        $content = 'content';

        Mail::send('email.toAdmin', ['title' => $title, 'content' => $content], function ($message) {
            $message->from('grozwalker@gmail.com', 'Laravel');

            $message->to('andrey_groza@mail.ru');
        });

        return 'mail sended';
    }
}
