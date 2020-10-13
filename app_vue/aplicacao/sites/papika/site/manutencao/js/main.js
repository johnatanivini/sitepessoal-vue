$().ready(function(){
	
	
	
	var formId = document.getElementById('form-cadastra');
	
	$(formId).validationEngine({
		scroll:false
	});
	
	$(formId).submit(function(e){
		
		e.preventDefault();
		
		
		var  nome= document.getElementById('nome').value;
		var  email= document.getElementById('email').value;
		var  nome_bebe= document.getElementById('nome_bebe').value;
		var  data_nasc= document.getElementById('data_nasc').value;
		var  cidade= document.getElementById('cidade').value;
		var  estado= document.getElementById('estado').value;
		var data = $(this).serialize();
		if($(this).validationEngine('validate')){
		
		
		
		
		
		$.ajax({
			
			url:'envia_cadastro.php',
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
	
	$('.mask-data').mask('99/99/9999');
		$('.mask-cpf').mask('99.999.999-99');
		$('.mask-telefone').mask('(99) 9999-8888');
	
})
