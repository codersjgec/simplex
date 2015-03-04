<?php namespace App\Http\Controllers;

use App\User, App\Levels, App\GameStatus, Request, Hash, Mail, Carbon\Carbon, Session;

class ElementaryController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Session::has('user_id')){
			return redirect('gameon');
		}else{
			return view('welcome');
		}
	}

	public function gameon()
	{
		$users = User::find(Session::get('user_id'));
		$gamestatus = GameStatus::where('user_id',Session::get('user_id'))->first();
		$levels = Levels::where('id',$gamestatus->level)->first();
		return view('gameon')->with('user',$users)->with('levels',$levels);
	}

}
