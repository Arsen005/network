<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title')</title>
	@include('template.basic.styles')
</head>
<body>
	
	<div class="wrapper">
		<aside>
			@yield('aside')
		</aside>

		<div class="content">
			@yield('content')
		</div>
	</div>

	@include('template.basic.scripts')
</body>
</html>