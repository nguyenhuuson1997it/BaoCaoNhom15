<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires',function(Blueprint $table){
            $table->increments('id');
            $table->string('question');
            $table->string('answera');
            $table->string('answerb');
            $table->string('answerc');
            $table->string('answerd');
            $table->string('answertrue');
            $table->integer('answer_cate_id')->unsigned();
            $table->foreign('answer_cate_id')->references('id')->on('cates')->onDelete('cascade');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questionnaires');
    }
}
