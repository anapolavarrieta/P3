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

Route::get('/', function()
{
	return View::make('index');
});


Route::get('/loremipsum', function()
{
	return View::make('lorem');
});

Route::post('/loremipsum', function()
{
	return View::make('lorem');
});

Route::get('/usergenerator', function()
{
	return View::make('user');
});

Route::post('/usergenerator', function()
{
	return View::make('user');
});

Route::get('/passwordgenerator', function()
{
	$array= new passgen();
	$password= $array->get_password();
	return View::make('password')-> with('password', $password);
});

Route::post('/passwordgenerator', function()
{
	$array= new passgen();
	$password= $array->get_password();
	return View::make('password')-> with('password', $password);
});

