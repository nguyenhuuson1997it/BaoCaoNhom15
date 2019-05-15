@extends('admin/master')
@section('content')
@section('function','Home Admin')
	<div class="col-md-6">
		{!! $chartproduct->render()!!}
		</div>
	<div class="col-md-6">
		{!! $chartcate->render() !!}
	</div>
@endsection