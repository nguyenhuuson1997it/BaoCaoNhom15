<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Route::get('/admin/','HomeController@getIndex')->name('/');
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','HomeController@getIndex')->name('/');


Route::group(['prefix'=>'admin'],function(){
	Route::get('adminlogin', 'LoginController@index')->name('adminlogin');
	Route::post('adminlogin', 'LoginController@check')->name('adminlogin');
	Route::post('post-adminlogin', 'LoginController@postAdminLogin')->name('post-adminlogin');
	Route::get('adminlogout', 'LoginController@adminlogout')->name('adminlogout');


	Route::get('adminhome', 'ChartController@index')->name('adminhome');

	Route::group(['prefix'=>'cate','middleware'=>'adminLogin'],function(){
		Route::get('add-cate','CateController@create')->name('add-cate');
		Route::post('add-cate','CateController@store')->name('add-cate');
		Route::get('list-cate','CateController@list')->name('list-cate');
		Route::get('delete-cate/{id}','CateController@destroy')->name('delete-cate');
		Route::get('edit-cate/{id}','CateController@edit')->name('edit-cate');
		Route::post('edit-cate/{id}','CateController@update')->name('edit-cate');
	});
	Route::group(['prefix'=>'user','middleware'=>'adminLogin'],function(){
		Route::get('add-user','UserController@create')->name('add-user');
		Route::post('add-user','UserController@store')->name('add-user');
		Route::get('list-user','UserController@list')->name('list-user');
		Route::get('delete-user/{id}','UserController@destroy')->name('delete-user');
		Route::get('edit-user/{id}','UserController@edit')->name('edit-user');
		Route::post('edit-user/{id}','UserController@update')->name('edit-user'); 
	});
	Route::group(['prefix'=>'question','middleware'=>'adminLogin'],function(){
		Route::get('add-question','QuestionController@create')->name('add-question');
		Route::post('add-question','QuestionController@store')->name('add-question');
		Route::get('list-question','QuestionController@list')->name('list-question');
		Route::get('delete-question/{id}','QuestionController@destroy')->name('delete-question');
		Route::get('edit-question/{id}','QuestionController@edit')->name('edit-question');
		Route::post('edit-question/{id}','QuestionController@update')->name('edit-question');
	});
	Route::group(['prefix'=>'product','middleware'=>'adminLogin'],function(){
		Route::get('add-product','ProductController@create')->name('add-product');
		Route::post('add-product','ProductController@store')->name('add-product');
		Route::get('list-product','ProductController@list')->name('list-product');
		Route::get('delete-product/{id}','ProductController@destroy')->name('delete-product');
		Route::get('edit-product/{id}','ProductController@edit')->name('edit-product');
		Route::post('edit-product/{id}','ProductController@update')->name('edit-product');
		Route::get('destroyImageDetail/{id}','ProductController@destroyImageDetail')->name('destroyImageDetail');
	});
});
