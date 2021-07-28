$(function(){

$('#pesquisar').bind('click',function(e){
	e.preventDefault();
	
	let tcampo = $('#cpf_cnpj').val().length;

	if(tcampo == 0)
	{
		
		$('#alert-preencher-cpf').modal('show');
		$('#cpf_cnpj').focus();
	}
	else
	{
		let cpf_cliente = $('#cpf_cnpj').serialize();
	
		$.ajax({

			type: 'GET',
			url:'./ajax/ajax-cons-veiculo.php',		
			data: cpf_cliente,
			dataType: 'json',
			success: function (retorno){

				if(retorno == "erro")
				{
					$('#cpf-alert').modal('show');
				}
				else
				{
					$('#nome_cliente').val(retorno.nome_cliente);
					$('#sobrenome_cliente').val(retorno.sobrenome_cliente);
					$('#cliente_codcliente').val(retorno.cliente_codcliente);
				}


			}
		})
	}

	

})
})


