<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\News;
use App\Newsletter;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Mockery\CountValidator\Exception;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $user = Newsletter::where('email', $request->email)->first();
        if ($user == null) {
            try {
                Newsletter::create([
                    'email' => $request->email,
                    'street' => $request->street,
                    'zipcode' => $request->zipcode,
                    'mobile' => $request->mobile,
                    'notification_type' => $request->notification_type
                ]);
                $this->send_notification($request->email, 'newsletter.subscribe');
                return "Fint!";
            } catch (\Exception $e) {
                return "Der er opstået en fejl!";
            }
        } else {
            return $this->subscribe_update($request);
        }
    }

    public function unsubscribe($email)
    {
        $user = Newsletter::where('email', $email)->first();
        $user->active = false;
        $user->save();

        $this->send_notification($email, 'newsletter.unsubscribe');
    }

    private function subscribe_update($request)
    {
        $user = Newsletter::where('email', $request->email)->first();

        $user->email = $request->email;
        $user->street = $request->street;
        $user->zipcode = $request->zipcode;
        $user->mobile = $request->mobile;
        $user->notification_type = $request->notification_type;
        $user->active = true;

        $user->save();

        $this->send_notification($user->email, 'newsletter.subscribe_update');
    }

    private function send_notification($email, $view)
    {
        Mail::send($view, ['email' => $email], function($message) use ($email) {
            $message->from('noreply@shemsiu.dk');
            $message->to($email);
        });
    }
}