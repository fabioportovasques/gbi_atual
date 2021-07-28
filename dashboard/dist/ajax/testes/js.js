

$(function(){

	$('#form-cons-veiculo').bind('submit',function(e){
		e.preventDefault();

			var txt = $(this).serialize();
			//let  dados = $('#cpf_cliente').serialize();
			
			alert('clicado');

  $.ajax({
		                type : 'POST',
		                dataType: 'JSON',
		                url  : './ajax/teste.php',
		                data: cpf_cliente,
		                success :  function(data){
		                    $('#cpf_cliente').val(data.cpf_cliente);
		                   // $('.recebeDados').html(data.cidade);
		                }
		            });

		            return false;
		        });
};


	/*
	
	$.ajax({

		type: 'POST',
		url:'./ajax/teste.php',		
		data:cpf_cliente,
		dataType:'JSON',
		
		success:function(data) {

				  alert('clicou');
			   $('#cpf_cnpj').val(data.cpf_cnpj);
		 



			}

		});

			

	})
})


*/