@extends('admin/master')
@section('content')
@section('function','Add User')
<div class="col-md-4">
    <div class="box box-primary">
       <form action="{{route('add-user')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <br>
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" placeholder="Please Enter Username" 
            />
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter name" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" />
        </div>
        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="0" checked="" type="radio">Admin
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" type="radio">Member
            </label>
        </div>
        <button type="submit" class="btn btn-success">Add</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <form>
        </div>
    </div>
    <div class="col-md-7">
        <div class="box box-primary">
            <br>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>UserName</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $u)
                <tr class="odd gradeX" align="center">
                    <td>{{$u->username}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                        @if($u->level==0)
                        {{"Admin"}}
                        @else
                        {{"User"}}
                        @endif
                    </td>
                    <td class="center"><a onclick="return confirm('Are you sure delete this?');"  href="{{route('delete-user',$u->id)}}"><button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button></a></td>
                    <td class="center"></i><a href="{{route('edit-user',$u->id)}}"><button class="btn btn-success"><i class="glyphicon glyphicon-cog"></button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        @endsection