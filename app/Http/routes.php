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

Route::get('/', 'WelcomeController@index');

Route::get('login', array('as' => 'login', 'uses' => 'UserController@login'));

Route::post('gameon', array('as' => 'gameon', 'uses' => 'UserController@gameon'));

Route::get('register', array('as' => 'register', 'uses' => 'UserController@register'));

Route::post('usersignup', array('as' => 'usersignup', 'uses' => 'UserController@usersignup'));

Route::get('forgotpassword', array('as' => 'forgotpassword', 'uses' => 'UserController@forgotpassword'));

Route::get('user/profile', array('as' => 'userprofile', 'uses' => 'UserController@profile'));

