<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use Illuminate\Http\Request;

use App\Cate;

use App\Question;

class QuestionController extends Controller
{
    public function create(){
		$parent_cate = Cate::select('id','name','parent_id')->get();  
		return view('admin.question.add_question',compact('parent_cate'));
	}
	public function store(QuestionRequest $req){
		$question = new Question;
		$question->answer_cate_id = $req->sltparent;
		$question->question = $req->txtQuestion;
		$question->answera=$req->txtAnswerA;
		$question->answerb=$req->txtAnswerB;
		$question->answerc=$req->txtAnswerC;
		$question->answerd=$req->txtAnswerD;
		$question->answertrue=$req->cknAnswer;
		$question->save();
		return redirect()->route('add-question')->with(['flash_message'=>'Success','flash_level'=>'success']);
	}
}

