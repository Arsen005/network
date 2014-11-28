<?php

class Post extends Eloquent {
	
	public static function add( $data )
	{

		$post = new Post();
		$post->title = '';
		$post->text = $data['text'];
		$post->likes = 0;
		$post->author_id = Auth::id();
		$post->save();

	}

}