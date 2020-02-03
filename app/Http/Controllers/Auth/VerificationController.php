<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function sendEmailVerification(Request $request)
    {
        $user=Auth::user();
        $token=str_random(40);
        $user->remember_token = $token;
        $user->save();

        $link=url('activated-account?token='.$token);

        Mail::send('mail.verify',compact('user','link'),function($m) use($user){
            $m->to($user->email)->subject('verifikasi akun');
        });
        return redirect('verify-account');
    }

    public function verifyToken(Request $request)
    {
        $token=$request->get('token');

        if($token){
            $user=User::where('remember_token',$token)->first();
            if($user){
                $user->email_verified_at=date('Y-m-d H:i:s');
                $user->remember_token=null;
                $user->save();
                return redirect('home');
            }
        }
        return redirect(('verify-account'));
    }
}
