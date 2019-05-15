@extends('admin/master')
@section('content')
@section('function','Edit Cate')
<div class="col-md-12 col-sm-12">
	<form action="{{route('edit-cate',$cate["id"])}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		<div class="form-group">
			<label>Category Parent</label>
			<select class="form-control" name="sltparent">
				<option value="0">Please Choose Category</option>
				@php
					cate_parent($parentcate,0,$str="",$cate["parent_id"]);
				@endphp
			</select>
		</div>
		<div class="form-group">
			<label>Category Name</label>
			<input class="form-control" name="txtCateName" value="{{old('txtCateName',isset($cate) ? $cate["name"] : null)}}" />
		</div>
		<div class="form-group">
			<label>Category Keywords</label>
			<input class="form-control" name="txtKeywords" value="{{old('txtKeywords',isset($cate) ? $cate["keywords"] : null)}}" />
		</div>
		<button type="submit" class="btn btn-success">Update</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	<form>
</div> 
@endsection