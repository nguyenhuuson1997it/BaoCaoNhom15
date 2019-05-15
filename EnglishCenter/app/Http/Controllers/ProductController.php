<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File; 
use Request;
use App\Cate;
use App\Product;
use App\ProductImage;
use Session;

class ProductController extends Controller
{
    public function create(){
		$parent_cate = Cate::all();
		return view('admin.products.add_product',compact('parent_cate'));
	}
	public function store(ProductRequest $req){
		$product = new Product;
		$product->cate_id = $req->sltparent;
		$product->name = $req->txtName;
		$product->alias=changeTitle($req->txtName);
		$product->intro=$req->txtIntro;
		$product->content = $req->txtContent;	
		$product->description =$req->txtDescription;
		$product->status = $req->rdoStatus;
		$product->user_id = 1;
		if(Input::hasFile('fImage_Add')){
			$file=Input::file('fImage_Add');
			$file_name=$file->getClientOriginalName();
			$file_exten=$file->getClientOriginalExtension();
			if($file_exten != 'jpg' && $file_exten != 'png'){
				return redirect()->route('add-product')->with(['flash_message'=>'Just apply jpg, png','flash_level'=>'danger']);
			}
			$file_new = str_random(2).'_'.$file_name;
			while(file_exists($file_new)){
				$file_new = str_random(2).'_'.$file_name;
			}
			$file->move("upload/product/",$file_new);
			$product->image=$file_new;
		}	
		$product->save();
		$product_id = $product->id;
		if(Input::hasFile('fImage_Add_Detail')){
			foreach (Input::file('fImage_Add_Detail') as $filedetail) {
				$product_img = new ProductImage;
				if(isset($filedetail)){
					$namedetail=$filedetail->getClientOriginalName();
					$extendetail=$filedetail->getClientOriginalExtension();
					if($extendetail != 'jpg' && $extendetail != 'png' && $extendetail != 'pdf'){
						return redirect()->route('add-product')->with(['flash_message'=>'Just apply jpg, jepg, png, pdf '])->with(['flash_level'=>'danger']);
					}
					$imagedetail=str_random(2)."_".$namedetail;
					while(file_exists("upload/product/details/".$imagedetail)){
						$imagedetail=str_random(2)."_".$namedetail;
					}
					$product_img->image=$imagedetail;	
					$product_img->product_id=$product_id;
					$filedetail->move('upload/product/details/',$imagedetail);
					$product_img->save();
				}
			}
		}			
		return redirect()->route('list-product')->with(['flash_message'=>'Success','flash_level'=>'success']);			
	}
	public function list(){
		$cate = Cate::select('id','name')->get();
		$product = Product::all();
		return view('admin.products.list_product',compact('cate','product'));
	}
	public function destroy($id){
		$product = Product::findOrFail($id);
		$product->delete($id);
		return redirect()->route('list-product')->with(['flash_message'=>'Success','flash_level'=>'success']);
	}
	public function edit($id){
		$cate = Cate::select('id','name','parent_id')->get()->toArray();  
		$product = Product::find($id);
		$img_details = Product::find($id)->pimages;
		return view('admin.products.edit_product',compact('cate','product','img_details'));
	}
	public function update(ProductRequest $req,$id){
		$product = Product::find($id);
		$product->cate_id = $req->sltparent;
		$product->name = $req->txtName;
		$product->alias=changeTitle($req->txtName);
		$product->intro=$req->txtIntro;
		$product->content = $req->txtContent;	
		$product->description =$req->txtDescription;
		$product->status = $req->rdoStatus;
		$product->user_id = 1;
		if(Input::hasFile('fImage_Add')){
			$file=Input::file('fImage_Add');
			$file_name=$file->getClientOriginalName();
			$file_exten=$file->getClientOriginalExtension();
			if($file_exten != 'jpg' && $file_exten != 'png'){
				return redirect()->route('add-product')->with(['flash_message'=>'Just apply jpg, png','flash_level'=>'danger']);
			}
			$file_new = str_random(2).'_'.$file_name;
			while(file_exists($file_new)){
				$file_new = str_random(2).'_'.$file_name;
			}
			$file->move("upload/product/",$file_new);
			$product->image=$file_new;
		}			
		$product_id = $product->id;
		if(Input::hasFile('fImage_Add_Detail')){
			foreach (Input::file('fImage_Add_Detail') as $filedetail) {
				$product_img = new ProductImage;
				if(isset($filedetail)){
					$namedetail=$filedetail->getClientOriginalName();
					$extendetail=$filedetail->getClientOriginalExtension();
					if($extendetail != 'jpg' && $extendetail != 'jpeg'&& $extendetail != 'png' && $extendetail != 'pdf'){
						return redirect()->route('add-product')->with(['flash_message'=>'Just apply jpg, jepg, png, pdf '])->with(['flash_level'=>'danger']);
					}
					$imagedetail=str_random(2)."_".$namedetail;
					while(file_exists("upload/product/details/".$imagedetail)){
						$imagedetail=str_random(2)."_".$namedetail;
					}
					$product_img->image=$imagedetail;	
					$product_img->product_id=$product_id;
					$filedetail->move('upload/product/details/',$imagedetail);
					$product_img->save();
				}
			}
		}
		$product->save();			
		return redirect()->route('edit-product',$id)->with(['flash_message'=>'Success','flash_level'=>'success']);
	}
	public function destroyImageDetail($id){
		if(Request::ajax()){
			$idHinh = (int)Request::get('idHinh');
			$image_detail = ProductImage::find($id);
			if(!empty($image_detail)){
				$img = 'upload/product/details/'.$image_detail->image;
				if(File::exists($img)){
					File::delete($img);
				}
				$image_detail->delete();
			}
			return "Oke";
		}
	}
}
