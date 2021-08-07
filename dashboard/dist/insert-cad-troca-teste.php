<?php
	
/*Debugar*/

/*
	
	?>
	<pre>
		<?php
	var_dump($_POST);
		?>
	</pre>
	
	

	*/

	 require 'troca.class.php';
	
		$troca = new Troca();

			//Se for campos for vazio então dispara a mensagem

			

			if (empty($_POST['filtro_oleo']) ) {

				print '<div class="alert alert-warning" role="alert">
						  Favor preencher o campo com o Filtro de óleo
						</div>';
				print '<script>window.setTimeout(function(){window.location=\'cad-troca.php\';}, 5000);</script>';


			}
			if (empty($_POST['data_troca']) ) {
				
				print '<div class="alert alert-warning" role="alert">
						  Favor preencher o campo com a data da troca
						</div>';
				print '<script>window.setTimeout(function(){window.location=\'cad-troca.php\';}, 5000);</script>';


			}if (empty($_POST['proxima_troca']) ) {
				
				print '<div class="alert alert-warning" role="alert">
						  Favor preencher o campo com a proxima troca de óleo
						</div>';
				print '<script>window.setTimeout(function(){window.location=\'cad-troca.php\';}, 5000);</script>';

			}if (empty($_POST['tipo_oleo']) ) {
				
				print '<div class="alert alert-warning" role="alert">
						  Favor preencher o campo com o tipo de óleo
						</div>';
				print '<script>window.setTimeout(function(){window.location=\'cad-troca.php\';}, 5000);</script>';
	

			}else {

				$proxima_troca = $_POST['proxima_troca'];
				$filtro_combustivel = $_POST['filtro_combustivel'];
				$filtro_cabine = $_POST['filtro_cabine'];
				$obs_troca = $_POST['obs_troca'];
				$filtro_ar = $_POST['filtro_ar'];
				$data_troca = $_POST['data_troca'];
				$filtro_oleo = $_POST['filtro_oleo'];
				$tipo_oleo = $_POST['tipo_oleo'];
				$status_filtro_combustivel = $_POST['status_filtro_combustivel'];
				$status_filtro_cabine = $_POST['status_filtro_cabine'];
				$status_filtro_ar = $_POST['status_filtro_ar'];
				$status_filtro_oleo = $_POST['status_filtro_oleo'];
				$km = $_POST['km'];
				$qtd_oleo = $_POST['qtd_oleo'];
				$cliente_codcliente = $_POST['cliente_codcliente'];
				$veiculo_cod_veiculo = $_POST['veiculo_cod_veiculo'];


				$troca ->adicionar($proxima_troca,$filtro_combustivel,$filtro_cabine,$obs_troca,$filtro_ar,$data_troca,
					$filtro_oleo,$tipo_oleo,$status_filtro_combustivel,$status_filtro_cabine,$status_filtro_ar,$status_filtro_oleo,$km,$qtd_oleo,$cliente_codcliente,$veiculo_cod_veiculo);
			}