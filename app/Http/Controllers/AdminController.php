<?php namespace App\Http\Controllers;

use App\User, App\Levels, App\GameStatus, Request, Hash, Mail, Carbon\Carbon, Session;

class AdminController extends Controller {

	public function dashboard()
	{
		// Elementary statistics
		$user_count = User::count();
		$level_last = Levels::count();
		return view('admin.dashboard')->with('title','Dashboard')->with('level_last',$level_last)->with('user_count',$user_count);
	}

	public function levels()
	{
		$level_last = Levels::count();
		$levels = Levels::all();
		
		return view('admin.levelcontrol')->with('title','Level Control')->with('level_last',$level_last)->with('levels',$levels);
	}

	public function levelcreate()
	{
		$name = Request::get('title');
		$email = Request::get('body');
		$picture = Request::file('picture');

		\Session::flash('flash_message','Successfully Registered. Obtain your password from your email to login.');

		$level_last = Levels::count();
		$levels = Levels::all();

		return redirect('admin.levelcontrol')->with('title','Level Control')->with('level_last',$level_last)->with('levels',$levels);
	}



}
