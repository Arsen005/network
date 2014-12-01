<?php

class IndexController extends BaseController {

	public function index()
	{
		if ( Auth::check() )
			return View::make('index')->with('posts', Auth::user()->posts());
		else
			return 'foo';

	}

}
