<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $message = 'test';
        $to = 'fengaoyang02@gmail.com';
        $subject = 'Message';
        Mail::send(
            'home',
            ['content' => $message],
            function ($message)
            use($to, $subject)
            {
                $message->to($to)->subject($subject);
            }
            );
    }


}
