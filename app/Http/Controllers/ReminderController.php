<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReminderController extends Controller
{
    public function __construct()
    {

    }

    public function daily_notify()
    {

    }

    private function send_notification($email, $view)
    {
        Mail::send($view, ['email' => $email], function($message) use ($email) {
            $message->from('noreply@shemsiu.dk');
            $message->to($email);
        });
    }
}
