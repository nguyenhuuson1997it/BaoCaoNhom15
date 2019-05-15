@extends('admin/master')
@section('content')
@section('function','List User')
<div class="col-md-12">
  <div class="box box-primary">
    <br>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <thead>
        <tr align="center">
          <th>ID</th>
          <th>UserName</th>
          <th>Email</th>
          <th>Level</th>
          <th>Delete</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        @foreach($user as $u)
        <tr class="odd gradeX" align="center">
          <td>{{$u->id}}</td>
          <td>{{$u->username}}</td>
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