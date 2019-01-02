<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserChart;

class ChartsController extends Controller
{
    public function apiIndex(Request $request){
		$charts = UserChart::all();
		return $charts;
	}
}
