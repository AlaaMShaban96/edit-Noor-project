<?php

namespace App\Http\Controllers\Cpanel\Auth;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function broker()
    {
        return Password::broker('admins');
    }

     /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('cpanel.auth.passwords.email');
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $email=$request->email;
        $admine =Admin::where('email',$request->email)->first();
        $number= Str::random(10);
        $admine->password=Hash::make($number);
        $admine->save();
        Mail::send("cpanel.auth.passwords.x",compact('number'), function($message) use ($email )   {

            $message->to($email)->subject("test");
            // $message->to($email)->attach(public_path($cv_path), [
            //     'as' => 'sample.pdf',
            //     'mime' => 'application/pdf',]);     
            });
            return redirect('cpanel/admin/login')->with('message', 'check your Email for New Password');
        // $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
    //     $response = $this->broker()->sendResetLink(
    //         $request->only('email')
    //     );

    //     return $response == Password::RESET_LINK_SENT
    //                 ? $this->sendResetLinkResponse($request, $response)
    //                 : $this->sendResetLinkFailedResponse($request, $response);
    // 
    }

}
