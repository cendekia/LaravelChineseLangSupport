<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$languages = ['en', 'zh-tw'];
$locale = (in_array(Request::segment(1), $languages)) ? Request::segment(1) : null;

App::setLocale($locale);

Route::group(array('prefix' => $locale), function()
{
	Route::get('/', 'WelcomeController@index');
});
