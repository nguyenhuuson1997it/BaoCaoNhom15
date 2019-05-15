<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cate;
use App\User;
use App\ProductImages;
use App\Comment;

class Product extends Model
{
    protected $table = 'products';

	protected $fillable = ['name','alias','price','intro','content','image','keywords','description','user_id','cate_id'];

	public $timestamps = true;

	public function cate(){
		return $this->beLongsTo('App\Cate');
	}
	public function user(){
		return $this->beLongsTo('App\User');
	}
	public function pimages(){
		return $this->hasMany('App\ProductImage');
	}
	public function comment(){
		return $this->hasMany('App\Comment');
	}
}
