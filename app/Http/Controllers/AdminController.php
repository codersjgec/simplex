<?php namespace App\Http\Controllers;

use App\User, Request, Hash, Mail, Carbon\Carbon, Session;

class AdminController extends Controller {

	public function dashboard()
	{
		// Elementary statistics
		return 'dashboard';
	}

	public function levels()
	{
		// View Levels
	}

}
