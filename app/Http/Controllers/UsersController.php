<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserChart;
class UsersController extends Controller
{
    public function apiIndex(Request $request){
		return \DataTables::of(User::query())->make(true);
	}

	public function webIndex(Request $request){
		$charts = UserChart::all();
		return view('users.index', compact('charts'));
	}

	public function webShow(Request $request, $id){
		$item = User::find($id);
		return view('users.show', compact('item'));
	}

	public function webUpdate(Request $request, $id){
		$item = User::find($id);
		$ignore = ['_token', '_method'];
		foreach ($request->all() as $key => $value) {
			if(!in_array($key, $ignore)){
				$item->{$key} = $value;
			}
		}
		$item->save();
		return redirect()->intended(route('users.show', $id));
	}
}
