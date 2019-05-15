<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CateRequest;
use App\Cate;
use Session; 

class CateController extends Controller
{
	public function create(){
        $cate = Cate::all();
        $parent_cate = Cate::select('id','name','parent_id')->get();     
        return view('admin.cate.add_cate',compact('cate','parent_cate'));
    }
    public function store(CateRequest $req){
        $cate = new Cate;
        $cate->name=$req->txtCateName;
        $cate->alias=changeTitle($req->txtCateName);
        $cate->parent_id=$req->sltparent;
        $cate->keywords=$req->txtKeywords;
        $cate->save();
        return redirect()->route('add-cate')->with(['flash_message'=>'Success','flash_level'=>'success']);
    }
    public function list(){
        $data = Cate::all();
        $parent_cate = Cate::select('id','name','parent_id')->get();     
        return view('admin.cate.list_cate',compact('parent_cate','data'));
    }
    public function destroy($id){
        $data=Cate::find($id);
        $data->delete($id);
        return redirect()->route('add-cate')->with(['flash_message'=>'Success','flash_level'=>'success']);
    }
    public function edit($id){
        $cate = Cate::find($id);
        $parentcate = Cate::select('id','name','parent_id')->get()->toArray();
        return view('admin.cate.edit_cate',compact('cate','parentcate'));
    }
    public function update(Request $req,$id){
        $cate = Cate::find($id);
        $cate->name=$req->txtCateName;
        $cate->alias=changeTitle($req->txtCateName);
        $cate->parent_id=$req->sltparent;
        $cate->keywords=$req->txtKeywords;
        $cate->save();
        return redirect()->route('add-cate')->with(['flash_message'=>'Success','flash_level'=>'success']);
    } 
}
