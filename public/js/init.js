(function() {

	$(document).ready(function() {
		$('#newPostForm .errors').hide();

		$('body').on('click', '#sendNewPost', function() {
			var url = $('#newPostForm').attr('action'),
				text = $('#newPostForm .new-post-text').text();
				alert = '';

			$.post(url, { text: text }, function( data ) {
				switch(data) {
					case 'empty':
						alert = 'Введите текст поста!';
						break;
					case 'okay':
						alert = 'Пост был добавлен!';
						$('#newPostForm textarea').val('');
						updateContent();
						break;
				}

				$('#newPostForm .errors').show().html(alert);
			});

			return false;
		});

		$('body').on('focusin', '#newPostForm .new-post-text', function() {
			$(this).parent().find('.new-post-placeholder').hide();
		});

		$('body').on('focusout', '#newPostForm .new-post-text', function() {
			if ( $(this).text() === '' )
				$(this).parent().find('.new-post-placeholder').show();
		});

		$('body').on('click', '#newPostForm .new-post-placeholder', function() {
			$(this).parent().find('.new-post-text').focus();
		});

	});

	function updateContent() {
		$.post('/content/reload', {} , function( data ) {
			$('.content').html(data);
		});
	}

})();
