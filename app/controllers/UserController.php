<?php

class UserController extends BaseController {

	public function login()
	{

		$data = Input::all();

	 	if ( User::login($data) ):
	 		return Redirect::to('/');
	 	else:
	 		return Redirect::back()->withErrors([ 'message' => 'fail' ], 'login');
	 	endif;
		
	}

	public function logout() 
	{
		if ( ! Auth::check() ):
			return Redirect::to('/');
		endif;

		Auth::logout();
		
		return Redirect::to('/');
	}

	public function register()
	{
		$data = Input::all();

		$validator = User::validate($data);

		if ( $validator->fails() ):
			return Redirect::back()->withErrors($validator, 'register');
		endif;

		User::register($data);

		return Redirect::to('/');
	}

}