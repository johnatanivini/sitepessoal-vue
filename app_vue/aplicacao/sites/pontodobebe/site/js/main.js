$(function() {

	

	// customizando select
	if (!$.browser.opera) {

		// select element styling
		$('select.select').each(
				function() {
					var title = $(this).attr('title');
					if ($('option:selected', this).val() != '')
						title = $('option:selected', this).text();
					$(this).css({
						'z-index' : 10,
						'opacity' : 0,
						'-khtml-appearance' : 'none'
					}).after('<span class="select">' + title + '</span>')
							.change(function() {
								val = $('option:selected', this).text();
								$(this).next().text(val);
							});
				});

	}
	;
	

	// cicle
	$('#banner ul').before('<div id="nav">').cycle({
		fx : 'growX,turnUp,growY,curtainY,turnLeft,curtainX,turnDown',
		random : true,
		speed : 2000,
		auto : 2000,
		pager : '#nav',
		next : ".next",
		prev : ".prev",
		easing : 'easeInOutBack'
	});
	

	// / function voltat onclick = voltar();
});




