jQuery(document).ready(function($) {
	
	$('#commentRoot li').each(function(i) {
		
		$(this).find('div.commentNumber').text('#' + (i + 1));
		
	});
	
	$('#commentform').on('click','#submit',function(e) {
		
		e.preventDefault();
		
		var comParent = $(this);
		
		$('.wrap_result').
			css('color','green').
			text('Сохранение комментария').
			fadeIn(500,function() {
				
				var data = $('#commentform').serializeArray();
				
				$.ajax({
					
					url:$('#commentform').attr('action'),
					data:data,
					headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
					type:'POST',
					datatype:'JSON',
					success: function(html) {
					if(html.error) {
							$('.wrap_result').css('color','red').append('<br /><strong>Ошибка: </strong>' + html.error.join('<br />'));
							$('.wrap_result').delay(2000).fadeOut(500);
						}
						else if(html.success) {
							$('.wrap_result')
											.append('<br /><strong>Сохранено!</strong>')
											.delay(2000)
											.fadeOut(500,function() {
												
												if(html.data.parent_id > 0) {
													comParent.parents('div#respond').prev().after('<ul class="children">' + html.comment + '</ul>');
												}
												else {
													if($.contains('#comments','ul#commentRoot')) {
														$('ul#commentRoot').append(html.comment);
													}
													else {
														
														$('#respond').before('<ul id="commentRoot">' + html.comment + '</ul>');
														
													}
												}
												
												$('#comment-reply').click();
											})
											
						}
						
					},
					error:function() {
						$('.wrap_result').css('color','red').append('<br /><strong>Ошибка: </strong>');
						$('.wrap_result').delay(2000).fadeOut(500, function() {
							$('#comment-reply').click();
						});
						
					}
					
				});
			});
		
	});
	
});