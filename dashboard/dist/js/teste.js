$(document).ready(function(){


		//função para quando estiver digitando já apareça a pesquisa
		$('#campo').keyup(function() {


							$('form-cons-veiculo').submit(function() {

								var dados = $(this).serialize();


								$.ajax({

									url:'./ajax/teste.php',
									method:'POST',
									dataType:'html',
									data: dados,
									success: function(data) {


										//limpar a div resultado e depois é repassado os dados
										$('#nome_cliente').empty().html(data);

									}


								});

								return false;
							
						});


					//Disparar o evento submit do form
					$('form').trigger('submit');

			});


	});
