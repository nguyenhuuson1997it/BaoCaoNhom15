@extends('admin/master')
@section('content')
@section('function','Edit Course')
<form action="{{route('edit-product',$product->id)}}" method="POST" name="frmEditProduct" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="col-md-4" id="frm_Preview" >
        <div class="form-group" id="frm_Show_Preview">
            <h4 align="center">Images</h4>
            <input type="hidden" name="img_current" value="{{$product->image}}"> 
            <img id="img_Current" src="upload/product/{{$product->image}}" class="img-responsive" >
        </div>  
        <div class="form-group">
            <input type="file" name="fImage_Add" id="fImage_Add"><br/>          
            <button type="button" id="btn_Add_Image" class="btn btn-primary"style="width:48%" >Add Image</button>
            <button type="button" id="btn_Refesh_Image" class="btn btn-danger" style="width:48%" >Refesh</button>
        </div>
        <div class="form-group">
            <h4 align="center" >Images Details</h4>
            <input type="file" id= "fImage_Add_Detail" name="fImage_Add_Detail[]" multiple="true">
            <button type="button" id="btn_Add_Image_Detail" class="btn btn-primary "style="width:48%" > Add Images Details</button>
            <button type="button" id="btn_Refesh_Image_Detail"class="btn btn-danger "style="width:48%" > Refesh Images Details</button>
        </div>
        <div class="form-group">                        
            <div id="frm_Show_Preview_Detail" >
                @foreach($img_details as $key => $item) 
                <div class="Image_Preview_Detail" idxoa="{{$key}}">
                    <img src="upload/product/details/{{$item['image']}}" idHinh="{{$item['id']}}" id="{{$key}}" />
                    <a href="javascript:void(0)" type="button" id="del_img_detail"  class="btn btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a>
                </div>                
                @endforeach   
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-7">
        <div class="form-group">
            <label>Category Name</label>
            <select class="form-control" name="sltparent">
                <option value="0">Please Choose Category</option>
                @php
                    cate_parent($cate,0,$str="",$product["cate_id"]);
                @endphp
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Name Manga" value="{{$product->name}}" />
        </div>
        <div class="form-group">
            <label>Introduce</label>
            <textarea id="demo" class="form-control" rows="3"   name="txtIntro" >{{$product->intro}}</textarea>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea id="demo" class="form-control ckeditor" rows="3"   name="txtContent">{{$product->content}}</textarea>
        </div>
        <div class="form-group">
            <label>Course Description</label>
            <textarea class="form-control" rows="3" name="txtDescription">{{$product->description}} </textarea>
        </div>
        <div class="form-group">
            <label>Product Status</label>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" @if($product->status==1) checked="checked" @endif type="radio">Show</label>
            <label class="radio-inline">
                <input name="rdoStatus" value="0" @if($product->status==0) checked="checked" @endif type="radio">Not Show
            </label>
        </div>
        <button type="submit" class="btn btn-success" style="width:48%" >Update</button>
        <button type="reset" class="btn btn-danger" style="width:48%">Reset</button>
    </div>
</form>
@endsection