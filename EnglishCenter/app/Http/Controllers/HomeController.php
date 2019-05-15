<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	function getIndex(){
		return view('user.page.home');
	}
}
