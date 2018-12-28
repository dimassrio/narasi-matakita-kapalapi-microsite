<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function apiIndex(Request $request){
		return \DataTables::of(User::query())->make(true);
	}

	public function webIndex(Request $request){
		return view('users.index');
	}

	public function webShow(Request $request, $id){
		$item = User::find($id);
		return view('users.show', compact('item'));
	}
}
