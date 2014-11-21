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

		</aside>

		<div class="content">

			@yield('main_content')

		</div>

	</div>

	@include('template.scripts')
</body>
</html>