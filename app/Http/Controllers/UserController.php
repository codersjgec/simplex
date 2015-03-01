<?php namespace App\Http\Controllers;

use App\User;
use Request;
use Hash;
use Mail;
use Carbon\Carbon;

class UserController extends Controller {

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

	public function register()
	{
		return view('register');
	}

	public function login()
	{
		return view('login');
	}

	public function forgotpassword()
	{
		return view('forgotpassword');
	}

	public function usersignup()
	{
		$name = Request::get('name');
		$email = Request::get('email');
		$institution = Request::get('institution');
		$password = str_random(7);

		$user = new User;
		$user->name = $name;
		$user->email = $email;
		$user->institution = $institution;
		$user->password = Hash::make($password);
		$user->token = str_random(60);
		$user->save();

		Mail::send('emails.welcome', array('password' => $password), function($message) use($email,$name)
		{
		    $message->to($email, $name)->subject('Welcome!');
		});

		\Session::flash('flash_message','Successfully Registered. Obtain your password from your email to login.');

		return redirect('login');
	}

	public function gameon()
	{
		$email = Request::get('username');
		$password = Request::get('password');

		$users = User::where('email',$email)->first();
		if($users!=NULL){
			if(Hash::check($password, $users->password)){
				// check his level status
				$users->last_login = Carbon::now();
				$users->save();
				return redirect('user/profile');
			}else{
				\Session::flash('flash_message','Incorrect Password');
				return redirect('login');
			}
		}else{
			\Session::flash('flash_message','User Not Found');
			return redirect('login');
		}
	}

	public function profile()
	{
		return view('user.profile');
	}


}
