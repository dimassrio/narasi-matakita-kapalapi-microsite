<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

	public function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();
		
        $this->clearLoginAttempts($request);
		
		// if($this->authenticated($request, $this->guard()->user())){
			
		// }
        return $this->authenticated($request, $this->guard()->user())
                ?: $this->processLoginResponse($this->guard()->user());
    }

	protected function processLoginResponse($user){
		if(!$user->getRoleNames()->contains('administrator')){
			$this->redirectTo = '/users/'.$user->id;
		}
		return redirect()->intended($this->redirectPath());
	}
}
