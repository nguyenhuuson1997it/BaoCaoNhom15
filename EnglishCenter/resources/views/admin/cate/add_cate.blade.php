@extends('admin/master')
@section('content')
@section('function','Add Category')
@section('function2','List Category')
<div class="row">
    <div class="col-md-4 col-sm-4">
      <div class="box box-primary">
        <br>
        <form action="{{route('add-cate')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label>Category Parent</label>
                <select class="form-control" name="sltparent">
                    <option value="0">If you want chose parent for it, If not, you can don't chose</option>
                    @php cate_parent($parent_cate); @endphp
                </select>
            </div>
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" />
            </div>
            <div class="form-group">
                <label>Category Content</label>
                <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" />
            </div>
            <button type="submit" class="btn btn-success">Add</button>
            <button onclick="location.href='{{route('add-cate')}}'" type="reset" class="btn btn-danger" >Reset</button>
        </form>
    </div>
</div>
<div class="col-md-7 col-sm-7">
  <div class="box box-primary">
    <br>
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
            @foreach($cate as $c)
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
    </div>
</div>
</div>
@endsection