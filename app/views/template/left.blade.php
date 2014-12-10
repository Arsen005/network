<div class="avatar">
	{{ HTML::image('img/avatar.png') }}
</div>

<div class="user-info">
	<p class="user-name">Вася Пупкин</p>
	<p class="user-short-info">20 лет, Мухосранск, МГУ</p>
</div>

<div class="user-new-post">
	<!-- <div id="newPost" contenteditable="true">
		как дела?
	</div> !-->

	{{ Form::open([ 'url' => '/add_post', 'id' => 'newPostForm' ]) }}

		<!--{{ Form::textarea('text', '', [ 'placeholder' => 'как дела?', 'rows' => '7', 'cols' => '55' ]) }} -->

		<div class="new-post-text-holder">
			<div class="new-post-placeholder">как дела?</div>
			<div class="new-post-text" tabindex="-1" contenteditable="true"></div>
		</div>

		<p class="errors"></p>
		{{ Form::submit('Отправить!', [ 'id' => 'sendNewPost' ]) }}
		<div class="clear"></div>

	{{ Form::close() }}
</div>

<div class="user-actions">
	<a href="/logout">Выйти</a>
</div>
