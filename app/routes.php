<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/',function(){
	return View::make('index');
});

Route::get('index',function(){
	return View::make('index');
});

Route::get('register', function()
{
	return View::make('register');
});

Route::get('about', function()
{
	return View::make('about');
});

Route::get('login', function()
{
	return View::make('login');
});

Route::get('member', function()
{
	return View::make('member');
});

Route::get('form', function()
{
	return View::make('form');
});

Route::get('upload', function(){
	return View::make('upload');
});

Route::post('registered','RegisterController@register');
Route::post('login','RegisterController@login');


Route::get('form', function(){
	return View::make('form');
});

Route::any('form-submit', function(){
		$fileUser =	Input::file('file') ; 
		$name =	$fileUser->getClientOriginalname();
	
	  $fileUser->move('File',$name);

});