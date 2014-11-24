<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static function register( $data ) 
	{
		$user = new User();
		$user->first_name = $data['first_name'];
		$user->second_name = $data['second_name'];
		$user->email = mb_strtolower($data['email']);
		$user->password = Hash::make($data['password_first']);
		$user->save();

		Auth::login($user, true);
	}

	public static function login( $data ) 
	{
		if ( isset($data['remember_me']) )
			return Auth::attempt([ 'email' => $data['email'], 'password' => $data['password'] ], true);
		else
			return Auth::attempt([ 'email' => $data['email'], 'password' => $data['password'] ]);
	}


	public static function validate( $data ) 
	{
		return Validator::make(
			$data,
			[
				'first_name' => 'required|min:2|max:100',
				'second_name' => 'required|min:2|max:100',
				'email' => 'required|min:2|email|unique:users|max:150',
				'password_first' => 'required|min:6|max:64|same:password_second',
				'password_second' => 'required|min:6|max:64'
			]);
	}

}
