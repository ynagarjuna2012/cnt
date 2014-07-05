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
	return View::make('home');
});
Route::get('aboutus', function()
{
	return View::make('aboutus');
});
Route::get('careers', function()
{
	return View::make('careers');
});
Route::get('business', function()
{
	return View::make('business');
});
Route::get('contactus', function()
{
	return View::make('contactus');
});
Route::get('business', function()
{
	return View::make('business');

});

Route::get('advertise', function()
{
	return View::make('advertise');
});
Route::get('partners', function()
{
	return View::make('partners');
});
Route::get('invest', function()
{
	return View::make('invest');
});
Route::get('clg', function()
{
	return View::make('clg');
});
Route::get('privacy', function()
{
	return View::make('privacy');
});
Route::get('sitemap', function()
{
	return View::make('sitemap');
});
Route::get('policies', function()
{
	return View::make('policies');
});
