<h1>Ваши записи</h1>

<div class="posts">

	@if ( isset($posts) )
		@foreach ( $posts as $post )

			<article class="post">
				<small>{{ $post->created_at }}</small>
				<p>{{ $post->text }}</p>
				<small><a href="#" class="response-btn">ответить</a></small>
			</article>

		@endforeach
	@endif

</div>
