<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Mail;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    // public function forgotPassword($request){
    //     try {
    //         $data = [
    //             'email' => $request->email,
    //             'link' => 'http://127.0.0.1:8080/core/password-confirmation',
    //         ];
    //        Mail::to($request->email)->send(new NewUserNotification($data));
    //         $auth = $request->email;
    //     return $this->ResponseSuccess([$auth]);
    //     } catch (\Exception $ex) {
    //         return $this->ResponseError($ex->getTrace(), $ex->getMessage());
    //     }
    // }
}
