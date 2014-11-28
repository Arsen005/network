<?php

class PostController extends BaseController {

	public function add()
	{
		if ( Request::ajax() && Auth::check() ):

			$data = Input::all();

			foreach ($data as $field):
				if ( empty($field) ) return 'empty';
			endforeach;

			Post::add($data);

			echo 'okay';

		endif;
	}

}