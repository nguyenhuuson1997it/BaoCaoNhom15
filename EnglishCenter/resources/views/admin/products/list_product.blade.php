@extends('admin/master')
@section('content')
@section('function','List Product')
<div class="col-md-12">
    <button id="btn-add-gallery">Upload Images</button>
        <input type="file" style="display:none;" multiple id="file-input-gallery">
    <div class="gallery-photo"></div>
</div>
@endsection
