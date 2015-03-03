<?php namespace App\Http\Controllers;

use App\User, App\Levels, App\GameStatus, Request, Hash, Mail, Carbon\Carbon, Session, Log;

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
		$title = Request::get('title');
		$body = Request::get('body');
		$picture = Request::file('picture');
				
		$file_name = Request::file('picture')->getClientOriginalName();
		Request::file('picture')->move(public_path() . "/originals", $file_name );
		$local_url = $file_name;

		$pic = 'http://localhost:8000/originals/'.$local_url;

		// store in db
		$level = new Levels;
		$level->title = $title;
		$level->body = $body;
		$level->picture = $pic;
		$level->save();

		\Session::flash('flash_message','Successfully Registered. Obtain your password from your email to login.');

		return redirect('adminlevel');
	}



}
