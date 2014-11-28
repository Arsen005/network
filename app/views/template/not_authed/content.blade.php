<h1>Регистрация</h1>

<div>
	{{ Form::open([ 'url' => '/register' ]) }}
		<ul class="auth-form-ul">
			<li>{{ Form::text('first_name', '', [ 'placeholder' => 'Введите ваше имя' ]) }}</li>
			<li>{{ Form::text('second_name', '', [ 'placeholder' => 'Введите вашу фамилию' ]) }}</li>
			<li>{{ Form::text('email', '', [ 'placeholder' => 'Введите вашу почту' ]) }}</li>
			<li>{{ Form::password('password_first', [ 'placeholder' => 'Введите пароль' ]) }}</li>
			<li>{{ Form::password('password_second', [ 'placeholder' => 'Повторите пароль' ]) }}</li>
			<li><small>* все поля обязательны к заполнению</small></li>

			<li id="regErrors" class="errors">
				@foreach ( $errors->register->getMessages() as $error )
					@foreach ( $error as $message )
						{{ $message }} <br />
					@endforeach
				@endforeach
			</li>

			<li>{{ Form::submit('Зарегистрироваться') }}</li>
		</ul>
	{{ Form::close() }}
</div>