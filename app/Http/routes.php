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

Route::get('/', 'ElementaryController@index');

Route::get('login', array('as' => 'login', 'uses' => 'UserController@login'));

Route::post('usersignin', array('as' => 'usersignin', 'uses' => 'UserController@usersignin'));

Route::get('register', array('as' => 'register', 'uses' => 'UserController@register'));

Route::post('usersignup', array('as' => 'usersignup', 'uses' => 'UserController@usersignup'));

Route::get('forgotpassword', array('as' => 'forgotpassword', 'uses' => 'UserController@forgotpassword'));

Route::get('profile', array('as' => 'profile', 'uses' => 'UserController@profile'));

Route::get('gameon', array('as' => 'gameon', 'uses' => 'ElementaryController@gameon'));

Route::get('admin', array('as' => 'admin', 'uses' => 'AdminController@dashboard'));

Route::get('adminlevel', array('as' => 'adminlevel', 'uses' => 'AdminController@levels'));

Route::post('levelcreate', array('as' => 'levelcreate', 'uses' => 'AdminController@levelcreate'));

