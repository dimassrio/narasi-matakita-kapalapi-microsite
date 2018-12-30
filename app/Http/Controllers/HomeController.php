<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
	// protected $redirectTo = 'home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$usersCount = User::count();
		$user = \Auth::guard()->user();
		if(!$user->getRoleNames()->contains('administrator')){
			return redirect()->intended(route('users.show', $user->id));
		}
        return view('home', compact('usersCount'));
    }
}
