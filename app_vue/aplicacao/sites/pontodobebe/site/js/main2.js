// Display each stageTip, bc Tools toolTip isn't flexible :
function stageTipOverOut(id) {
	var thisStageTip = $(id).children('.stageTip'); // stageTip div in each
	var thisStageTipRt = $(id).children('.stageTipRtAlign'); // stageTip div
																// in each
	$(thisStageTip).css('display', 'block');
	$(thisStageTipRt).css('display', 'block');

	$(id).mouseout(function() {
		var thisStageTip = $(id).children('.stageTip'); // stageTip div in each
		var thisStageTipRt = $(id).children('.stageTipRtAlign'); // stageTip
																	// div in
																	// each
		$(thisStageTip).css('display', 'none');
		$(thisStageTipRt).css('display', 'none');
	});
}

$(document)
		.ready(
				function() {
					
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
					
					/*
					 * change this according to total width and number of
					 * visible squares 1 square = (9w + 1margin) = 10 size
					 * ==(timeline width/10)-3
					 */
					// initialize scrollable
					$("a.disabled").click(function() {
						return false;
					});
					$('.scrollable').scrollable({
						size : 40,
						speed : 400
					});
					$('.scrolloja').scrollable({
						size:5,
						speed:600,
						circular:true
					});

					function mostraImagem() {
						var imagemdestaque = $('.imagem-noticia-destaque span');
						var imagem2 = $('.tabs article:first').find('img')
								.attr('src');

						imagemdestaque.animate({
							'opacity' : '1'
						}, 200).html('<img src="' + imagem2 + '">');

						$('.tabs article').hover(function() {
							var imagem = $(this).find('img').attr('src');
							imagemdestaque.animate({
								'opacity' : '.1'
							}, 500);
							imagemdestaque.animate({
								'opacity' : '1'
							}, 500).html('<img src="' + imagem + '">');

						});
					}
					$('.tabs article:last').css({
						'border-bottom' : 'none'
					});
					mostraImagem();
					/*
					 * anulando refresh pagina
					 */
					$('a[href=#]').click(function() {
						return false;
					});
					// /
					$('#error,#success').click(function() {

						$(this).remove();

					});
					
					/*
					 * Placeholder Simulamos placeholder em browsers que nao dao
					 * suporte
					 */
					$('input[placeholder],textarea[placeholder],input[type=password][placeholder]').placeholder();

					/*
					 * Validacoes em formulario com validationEngine
					 */
					$("form.validacoes,form.validaNewsletter").validationEngine();
					//
					$('.voltar').click(function() {
						return history.back(-1);
					});
					$(".line").append("<span class=\"line1\"></span>"
									+"<span class=\"line2\"></span>"
									+"<span class=\"line3\"></span>"
									+"<span class=\"line4\"></span>"
									+"<span class=\"line5\"></span>");

				});