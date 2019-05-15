<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\User;
use Hash;
use Session;

class UserController extends Controller
{
    public function create(){
		$user = User::all();
		return view('admin.users.add_user',compact('user'));
	}
	public function store(UserRequest $request){
		$user = new User;
		$user->username=$request->txtUser;
		$user->name=$request->txtName;
		$user->email=$request->txtEmail;
		$user->password=bcrypt($request->txtPass);
		$user->level=$request->rdoLevel;
		$user->remember_token=$request->_token;
		$user->save();
		return redirect()->route('add-user')->with(['flash_message'=>'Success','flash_level'=>'success']);
	}
	public function list(){
		$user = User::all();
		return view('admin.users.list_user',compact('user'));
	}
	public function destroy($id){
		$user = User::find($id);
		$user->delete($id);
		return redirect()->route('add-user')->with(['flash_message'=>'Success','flash_level'=>'success']);
	}
	public function edit($id){
		$user = User::find($id);
		return view('admin.users.edit_user',compact('user'));
	}
	public function update(Request $request,$id){
		$user = User::find($id);
		if(Input::hasFile('file_update_image_user')){
			$file = Input::file('file_update_image_user');
			$file_name=$file->getClientOriginalName();
			$file_exten=$file->getClientOriginalExtension();
			if($file_exten != 'jpg' && $file_exten != 'png'){
				return redirect()->route('add-user')->with(['flash_message'=>'Just apply jpg, png','flash_level'=>'danger']);
			}
			$file_new = str_random(2).'_'.$file_name;
			while(file_exists('upload/users/'.$file_new)){
				$file_new = str_random(2).'_'.$file_name;
			}
			$file->move("upload/users/",$file_new);
			$user->avatar=$file_new;
		}
		$user->name=$request->txtName;
		$user->email=$request->txtEmail;
		$user->password=bcrypt($request->txtPass);
		$user->level = $request->rdoLevel;
		$user->save();
		return redirect()->route('edit-user',$id)->with(['flash_message'=>'Success','flash_level'=>'success']);
	}
}
