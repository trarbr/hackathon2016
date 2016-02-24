<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\News;
use App\Newsletter;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mockery\CountValidator\Exception;

class NewsletterController extends Controller
{
    public function __construct()
    {

    }

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
                return "Fint!";
            } catch (\Exception $e) {
                return "Der er opstået en fejl!";
            }
        } else {
            return $this->subscribe_again($request);
        }
    }

    public function unsubscribe($email)
    {
        $user = Newsletter::where('email', $email)->first();
        $user->active = false;
        $user->save();


    }

    private function subscribe_again($request)
    {
        $user = Newsletter::where('email', $request->email)->first();

        $user->email = $request->email;
        $user->street = $request->street;
        $user->zipcode = $request->zipcode;
        $user->mobile = $request->mobile;
        $user->notification_type = $request->notification_type;
        $user->active = true;

        $user->save();
    }

    //Send mail to the user when they subscribe and when they leave our mailing list!
    //Send newsletter to the mailing list where "active" is true
    //More coming
}