<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cate;
use App\User;

class Question extends Model
{
    protected $table = 'questionnaires';

	protected $fillable = ['question','answera','answerb','answerc','answerd','answertrue','answer_cate_id'];

	public $timestamps = false;

	public function cate(){
		return $this->beLongsTo('App\Cate');
	}
}
