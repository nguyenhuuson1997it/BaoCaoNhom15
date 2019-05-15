@extends('admin/master') 
@section('content') 
@section('function','Edit User')
<form action="{{route('edit-user',$user->id)}}" method="POST"  name="frmEditUser" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-body box-profile">
                <div id="frm_Show_Preview">
                    <img class="profile-user-img img-responsive img-circle" src="upload/users/{{$user->avatar}}" id="img_curent_user">                    
                </div>
                <br>
                <h3 class="profile-username text-center">{{$user->name}}</h3>
                <p class="text-muted text-center">
                    Position: @if($user->level==0) {{"Admin"}} @else {{"User"}} @endif
                </p>
                <input type="hidden" name="img_current" value="{{$user->image}}">
                <input style="display: none;" type="file" name="file_update_image_user" id="file_update_image_user">
                <a id="btn_update_image_user" class="btn btn-primary btn-block"><b>Update Avatar</b></a>           
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" value="{{old('txtUser',isset($user)?$user->username:null)}}" disabled="disabled" />
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter name" value="{{old('txtName',isset($user)?$user->name:null)}}" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" id="openChange" placeholder="Please Enter Password" value="{{old('txtPass',isset($user)?$user->password:null)}}" />
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" id="openChange" placeholder="Please Enter RePassword" value="{{old('txtRePass',isset($user)?$user->password:null)}}" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" value="{{old('txtEmail',isset($user)?$user->email:null)}}" />
        </div>
        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="0" @if($user->level==0) checked="checked" @endif type="radio">Admin
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" @if($user->level==1) checked="checked" @endif type="radio">User
            </label>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <button onclick="location.href='{{route('edit-user',$user->id)}}'" type="reset" class="btn btn-danger" >Reset</button>
    </div>
    <form>
        @endsection