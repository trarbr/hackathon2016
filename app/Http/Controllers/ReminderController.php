<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ReminderController extends Controller
{
    public function daily_notify()
    {
        foreach(Newsletter::where('active', true)->get() as $subscription) {
            $this->send_notification($subscription->email);
        }
    }

    private function send_notification($email)
    {
        Mail::send('reminder.daily', ['email' => $email], function($message) use ($email) {
            $message->from('noreply@shemsiu.dk');
            $message->to($email);
        });
    }
}
