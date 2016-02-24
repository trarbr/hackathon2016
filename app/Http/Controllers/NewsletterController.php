<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
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
    }

    public function unsubscribe($email)
    {
        $user = Newsletter::where('email', $email)->get();
        if ($user != null) {
            $user->active = false;
            $user->save();
        }
    }
    //Remove from the mailing list (only change the active field from true to false)
    //Send newsletter to the mailing list where "active" is true
    //More coming
}