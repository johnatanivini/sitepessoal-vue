$().ready(function(){
	
	
	
	var formId = document.getElementById('form-cadastra');
	var formIndique = document.getElementById('form-indica');
	
	$(formId,formIndique).validationEngine({
		scroll:false
	});
	
	$(formId).submit(function(e){
		
		e.preventDefault();
		
		var data = $(this).serialize();
		if($(this).validationEngine('validate')){

		$.ajax({
			
			url:'home/cliente_cadastro',
			type:'post',
			data:data,
			statusCode:{
				404:function(){
					alert('Página não encontrada')
				}
			},
			beforeSend:function(){
				$('#result').html("<br><label class='bgverde'>Enviando...</label>");
			},
			success: function(data){
				
				$('#result').html("<br><label class='bgverde'>"+data+"</label>");
				
			}
					
			
			
		})
		
		
		
		return false;
		}else{
			console.log('Não validou');
		}
	})
	
	
	/*form indicacao*/
	
	
	
	$(formIndique).submit(function(e){
		
		e.preventDefault();
		
		var data = $(this).serialize();
		
		if($(this).validationEngine('validate')){
		
		$.ajax({
			
			url:'home/indica_cadastro',
			type:'post',
			data:data,
			statusCode:{
				404:function(){
					alert('Página não encontrada')
				}
			},
			beforeSend:function(){
				$('#result').html("<br><label class='bgverde'>Enviando...</label>");
			},
			success: function(data){
				
				$('#result').html("<br><label class='bgverde'>"+data+"</label>");
				$('.show_indique').show();
				
			}
					
			
			
		})
		
		
		
		return false;
		}else{
			console.log('Não validou');
		}
	})
	
	
	
	$('.mask-data').mask('99/99/9999');
		$('.mask-cpf').mask('99.999.999-99');
		$('.mask-telefone').mask('(99) 9999-8888');
	
})
