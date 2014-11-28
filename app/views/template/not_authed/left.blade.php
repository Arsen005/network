<div class="avatar">
	{{ Form::open([ 'url' => '/login' ]) }}
		<ul class="auth-form-ul">
			<li><b>Авторизация</b></li>
			<li>{{ Form::text('email', '', [ 'placeholder' => 'Введите почту' ]) }}</li>
			<li>{{ Form::password('password', [ 'placeholder' => 'Введите пароль' ]) }}</li>
			<li>{{ Form::checkbox('remember_me', 'true', true, [ 'id' => 'remember_me' ]) }} <label for="remember_me">Запомнить меня</label></li>
			<li id="authErrors" class="errors">
				@if ( count($errors->login) > 0 )
					Ошибка авторизации!
				@endif
			</li>
			<li>{{ Form::submit('Войти') }}</li>
		</ul>
	{{ Form::close() }}
</div>