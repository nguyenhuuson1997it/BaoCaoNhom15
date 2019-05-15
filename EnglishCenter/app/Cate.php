<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Cate extends Model
{
    protected $table = 'cates';

    protected $fillable=['name','alias','order','parent_id','keywords','description'];

	public $timestamps = true;

	public function product(){
		return $this->hasMany('App\Product');
	}
}
