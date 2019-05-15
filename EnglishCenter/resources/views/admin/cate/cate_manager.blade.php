@extends('admin/master') @section('content')
<div class="col-md-12">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddCate">
		Add Category
	</button><br><br>
	<!-- Modal -->
	<div class="modal fade" id="modalAddCate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<form id="frmAddCate" name="frmAddCate" method="post" >
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="modal-body">
						<div class="form-group">
							<label>Category Parent</label>
							<select class="form-control" name="sltparent">
								<option value="0">If you want chose parent for it, If not, you can don't chose</option>
								@php
								cate_parent($parent_cate); 
								@endphp
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
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>          
				</form>
			</div>
		</div>
	</div>
</div>
<div class="col-md-12">
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr align="center">
				<th>Name</th>
				<th>Details</th>
				<th>Category Parent</th>
				<th>Delete</th>
			</tr>
		</thead>
		{{ csrf_field() }}  
		<tbody id="resultforajax">		
			@foreach($cate as $c)
			<tr class="odd gradeX" align="center" id="post{{$c->id}}">   	
				<td>{{$c->name}}</td>
				<td>{{$c->keywords}}</td>
				<td >	
					<p class="nameparent">
						@if($c->parent_id==0)				
						{!!"It's Parent"!!}
						@else
						@foreach($parent_cate as $p)
						@if($p->id==$c->parent_id)
							{!!$p->name!!}
						@endif
						@endforeach
						@endif
					</p>
										
				</td>
				<td>
					<a class="show-modal btn btn-info btn-sm" data-id="{{$c->id}}" data-name="{{$c->name}}"
						data-keywords="{{$c->keywords}}" data-parent_id="{{$c->parent_id}}" >
						<i class="fa fa-eye"></i>
					</a>
					<a class="edit-modal btn btn-warning btn-sm" data-id="{{$c->id}}" data-name="{{$c->name}}" data-keywords="{{$c->keywords}}" data-parent_id="{{$c->parent_id}}" >
						<i class="glyphicon glyphicon-pencil"></i>
					</a>
					<a class="delete-modal btn btn-danger btn-sm" data-id="{{$c->id}}" data-name="{{$c->name}}" data-keywords="{{$c->keywords}}" data-parent_id="{{$c->parent_id}}" >
						<i class="glyphicon glyphicon-trash"></i>
					</a>
				</td>
			</tr>	
			@endforeach
		</tbody>
	</table>
</div>
<div class="modal fade" id="modalEditCate" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<form id="frmEditCate" name="frmEditCate" method="post" >
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="modal-body">
						<input type="hidden" id="idEditCate" name="idEditCate">
						<div class="form-group">
							<label>Category Parent</label>
							<select class="form-control" id="sltEditParent" name="sltEditParent">
								<option value="0">If you want chose parent for it, If not, you can don't chose</option>
								@php
								cate_parent($parent_cate); 
								@endphp
							</select>
						</div>							
						<div class="form-group">
							<label>Category Name</label>
							<input class="form-control" id="txtEditCateName" name="txtEditCateName" placeholder="Please Enter Category Name" />
						</div>
						<div class="form-group">
							<label>Category Content</label>
							<input class="form-control" id="txtEditKeywords" name="txtEditKeywords" placeholder="Please Enter Category Keywords" />
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>          
				</form>
			</div>
		</div>
	</div>

<div id="frmShowCate" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="">ID :</label>
					<b id="idcate"/>
				</div>
				<div class="form-group">
					<label for="">Parent :</label>
					<b id="parentcate"/>
				</div>
				<div class="form-group">
					<label for="">Title :</label>
					<b id="namecate"/>
				</div>
				<div class="form-group">
					<label for="">Body :</label>
					<b id="keywordscate"/>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection