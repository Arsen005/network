<?php

class UserController extends BaseController {

	public function login()
	{

		return 'login';
	}

	public function register()
	{
		$data = Input::all();

		$validator = Validator::make(
			$data,
			[
				'first_name' => 'required|min:2|max:100',
				'second_name' => 'required|min:2|max:100',
				'email' => 'required|min:2|email|unique:users|max:150',
				'password_first' => 'required|min:6|max:64|same:password_second',
				'password_second' => 'required|min:6|max:64'
			]);

		if ( $validator->fails() ):
			return $validator->messages();
		endif;	

		$user = new User();

		$user->first_name = $data['first_name'];
		$user->second_name = $data['second_name'];
		$user->email = mb_strtolower($data['email']);
		$user->password = Hash::make($data['password_first']);

		$user->save();

		Auth::login($user, true);

		return $data;
	}

}