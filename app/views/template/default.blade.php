<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title')</title>
	@include('template.styles')
</head>
<body>
	
	<div class="wrapper">
		
		<aside>

			@if ( Auth::check() )

				<div class="avatar">
					{{ HTML::image('img/avatar.png') }}
				</div>

				<div class="user-info">
					<p class="user-name">Вася Пупкин</p>
					<p class="user-short-info">20 лет, Мухосранск, МГУ</p>
				</div>

				<div class="user-new-post">
					<div id="newPost" contenteditable="true">
						как дела?
					</div>

					<input id="sendNewPost" type="button" value="отправить" />
				</div>

			@else

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

			@endif

		</aside>

		<div class="content">

			@if ( Auth::check() )
				@yield('main_content')
			@else
				
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

			@endif


		</div>

	</div>

	@include('template.scripts')
</body>
</html>