<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductImage extends Model
{
    protected $table ='product_images';

    protected $fillable=['id','image','product_id'];

    public $timestamps = true;
    
    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
