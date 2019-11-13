<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use DB;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username1()
    {
        return 'username';
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only(['username', 'password']);

        /** @var \Illuminate\Validation\Validator $validator */
        $validator = Validator::make($credentials, [
            'username'   => 'required',
            'password'   => 'required',
        ]);
//        var_dump('sd');die;

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        if ($this->guard()->attempt($credentials)) {
            $res = $this->attempLoginUsingUsernameAsAnEmail($request);
            if($res){
//                $user = DB::table('admin_users')->whereRaw("username='" . $request->input('username') . "'")->get();
//                $userObj = \User::find($user[0]->id);
//                Auth::login($userObj);
                return $this->sendLoginResponse($request);
            }
//            return $res;

        }

        return back()->withInput()->withErrors([
//            $this->username() => $this->getFailedLoginMessage(),
            'username' => $this->getFailedLoginMessage(),
        ]);
    }

    protected function getFailedLoginMessage()
    {
        return Lang::has('auth.failed')
            ? trans('auth.failed')
            : 'These credentials do not match our records.';
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        if ($this->username() === 'email') {
            return $this->attemptLoginAtAuthenticatesUsers($request);
        }
        if (! $this->attemptLoginAtAuthenticatesUsers($request)) {
            $res = $this->attempLoginUsingUsernameAsAnEmail($request);
            if($res){
                $user = DB::table('admin_users')->whereRaw("username='" . $request->input('username') . "'")->get();
                $userObj = User::find($user[0]->id);
                Auth::login($userObj);
            }
            return $res;
        }
        return false;
    }

    /**
     * Attempt to log the user into application using username as an email.
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    protected function attempLoginUsingUsernameAsAnEmail(Request $request)
    {
        return $this->guard()->attempt(
            ['username' => $request->input('username'), 'password' => $request->input('password')],
            $request->has('remember')
        );
    }

}
