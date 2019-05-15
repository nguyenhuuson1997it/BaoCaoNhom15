@extends('admin/master')
@section('content')
@section('function','Add Course')
<form action="{{route('add-product')}}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
	<div class="col-md-12">
		<div class="box box-primary">
			<br>
			<div class="form-group">
				<label>Category Product</label>
				<select class="form-control" name="sltparent">
					<option value="0">Please Choose Category</option>
					@php cate_parent($parent_cate); @endphp
				</select> 
			</div>
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" name="txtName" placeholder="Please Enter Name Manga" />
			</div>
			<div class="form-group">
				<label>Introduce</label>
				<textarea id="demo" class="form-control" rows="3"   name="txtIntro"></textarea>
			</div>
			<div class="form-group">
				
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="col-md-8">
							<input type="file" style="display: none;" name="fImage_Add" id="fImage_Add"><br/>          
							<button type="button" id="btn_Add_Image" class="btn btn-primary" >Add Image</button>
						</div>
						<div class="col-md-4">
							fdadfs
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Content</label>
				<textarea id="demo" class="form-control ckeditor" rows="3"   name="txtContent"></textarea>
			</div>
			<div class="form-group">
				<label>Product Description</label>
				<textarea class="form-control" rows="3" name="txtDescription"></textarea>
			</div>
			<div class="form-group">
				<label>Product Status</label>
				<label class="radio-inline">
					<input name="rdoStatus" value="1" checked="" type="radio">Show
				</label>
				<label class="radio-inline">
					<input name="rdoStatus" value="0" type="radio">Not Show
				</label>
			</div>
			<button type="submit" class="btn btn-success">Add</button>
			<button onclick="location.href='{{route('add-product')}}'" type="reset" class="btn btn-danger" >Reset</button>
		</div>
	</div>
	
</form>
@endsection