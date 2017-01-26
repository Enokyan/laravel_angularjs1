<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $redirectTo = '/home';


    public function login(Request $request)
    {
        $token = $request->input('g-recaptcha-response');
        if($token) {
            $client = new Client();
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify',[
               'form_params' => array(
                   'secret'   => '6LdIOBMUAAAAABi9XlC19KUO_V2ATPXFqurXYnCR',
                   'response' => $token
               )
            ]);
            $result = json_decode($response->getBody()->getContents());
            if($result->success){
                Session::flash('success', 'Yes we know yor are human');
                $this->validateLogin($request);

                if ($this->hasTooManyLoginAttempts($request)) {
                    $this->fireLockoutEvent($request);

                    return $this->sendLockoutResponse($request);
                }

                if ($this->attemptLogin($request)) {
                    return $this->sendLoginResponse($request);
                }

                $this->incrementLoginAttempts($request);

                return $this->sendFailedLoginResponse($request);
            }
            else{
                Session::flash('error', 'You are probably a robot!');
                $request->flashOnly('email');
                return redirect()->back()->with('error','Are You a robot?');
            }


        }
        else{
            $request->flashOnly('email');
            return redirect()->back()->with('error','Are You a robot?');
        }

    }

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
