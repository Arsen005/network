(function() {

	$(document).ready(function() {
		$('#newPostForm .errors').hide();
		
		$('body').on('click', '#sendNewPost', function() {
			var data = $('#newPostForm').serialize(),
				url = $('#newPostForm').attr('action'),
				alert = '';

			$.post(url, data, function( data ) {
				switch(data) {
					case 'empty':
						alert = 'Введите текст поста!';
						break;
					case 'okay':
						alert = 'Пост был добавлен!';
						break;
				}

				$('#newPostForm .errors').show().html(alert);
			});

			return false;
		});

	});

})();