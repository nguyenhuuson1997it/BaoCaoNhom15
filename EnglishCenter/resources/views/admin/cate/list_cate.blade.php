@extends('admin/master')
@section('content')
@section('function','List Category')
<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>Name</th>
            <th>Details</th>
            <th>Category Parent</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $c)
        <tr class="odd gradeX" align="center">
            <td>{{$c->name}}</td>
            <td>{{$c->keywords}}</td>
            <td>
               @if($c->parent_id==0)
                  {!!"It's Parent"!!}
               @else
               @foreach($parent_cate as $p)
                 @if($p->id==$c->parent_id)
                    {!!$p['name']!!}
                 @endif
               @endforeach
               @endif
           </td>
           <td class="center"><a onclick="return confirm('Are you sure delete this?');"  href="{{route('delete-cate',$c->id)}}"><button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button></a></td>
           <td class="center"></i><a href="{{route('edit-cate',$c->id)}}"><button class="btn btn-success"><i class="glyphicon glyphicon-cog"></button></a></td>
           </tr>
           @endforeach
       </tbody>
   </table>
   @endsection