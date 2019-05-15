<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use DB;

class LoginController extends Controller
{
    function index()
	{
		return view('admin.login');
	}
	function check(Request $request)
	{
		if($request->get('username'))
		{
			$username = $request->get('username');
			$data = DB::table('users')->where('username',$request->username)->count();
			if($data > 0)
			{
				echo 'unique';        
			}
			else
			{
				echo 'not_unique';
			}
		}   
	}

	function postAdminLogin(Request $request){
		if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
			return redirect()->route('list-user');
		}
		else{
			return redirect()->route('adminlogin')->with(['flash_message'=>'Password wrong','flash_level'=>'danger']);
		}
	}
	function adminlogout(){
		Auth::logout();
		return redirect(route('adminlogin'));
	}
}
