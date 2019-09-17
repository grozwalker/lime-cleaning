<?php

namespace App\Http\Controllers\Frontend;

use App\Staff;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Mail;
use PHPMailer\PHPMailer\PHPMailer;

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

            if ( $staff->save() ){

                $emailData = [
                    'fio' => $staff->fio,
                    'age' => $staff->age,
                    'citizen' => $staff->citizen,
                    'phone' => $staff->phone,
                ];

                $to_name = 'Lime Cleaning';
                $to_email = 'lime-cleaning@yandex.ru';
                
                Mail::send('email.;', $emailData, function($message) use ($to_name, $to_email) {
                    $message->to($to_email, $to_name)
                        ->subject('Резюме на работу');
                    $message->from('lime-cleaning@yandex.ru','Lime Cleaning');
                });

/*                $emailView = View::make('email.mailWork', $emailData);
                $emailData = $emailView->render();

                $mail = new PHPMailer(true); // notice the \  you have to use root namespace here
                try {
                    $mail->isSMTP();
                    $mail->CharSet = "utf-8";
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = env('MAIL_ENCRYPTION', 'ssl');
                    $mail->Host = env('MAIL_HOST', 'smtp.yandex.ru');
                    $mail->Port = env('MAIL_PORT', '465');
                    $mail->Username = env('MAIL_USERNAME', 'lime-cleaning@yandex.ru');
                    $mail->Password = env('MAIL_PASSWORD');
                    $mail->setFrom("lime-cleaning@yandex.ru", "Lime Cleaning");
                    $mail->Subject = "Резюме на работу";
                    $mail->MsgHTML($emailData);
                    $mail->addAddress("lime-cleaning@yandex.ru");
                    $mail->send();
                } catch (phpmailerException $e) {
                    //dd($e);
                } catch (Exception $e) {
                    //dd($e);
                }*/

                return 'Спасибо за обращение. мы свяжемся с Вами в ближайшее время';
            } else {
                return 'Произошла ошибка, попробуйте немного позднее или позвоните по телефону <a href="tel:+79883888336">+7 988 38 883 36</a>';
            }



        } else {
            return 'Вы уже подавлаи заявку. Мы свяжемся с Вами в ближайшее время.';
        }
    }
}
