<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;

class Comment extends Model
{
    protected $table ='comments';

	protected $fillable=['id','comment','user_id','product_id'];

	public $timestamps = true;

	public function product(){
    	return $this->belongsTo('App\Product');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
