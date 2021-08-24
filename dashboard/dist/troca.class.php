
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="img/oleo.png">
	<title></title>
</head>

		
       
        <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    

<body>

</body>
</html>



  <?php 

  class Troca {

	private $pdo;

	public function __construct( ) {

		//conexão banco de dados

		$this -> pdo = new PDO("mysql:dbname=db-gbi;host=localhost","root","F@bio102030");
	
		}

				//create

		
				

		public function adicionar ($proxima_troca,$filtro_combustivel,$filtro_cabine,$obs_troca,$filtro_ar,$data_troca,
					$filtro_oleo,$tipo_oleo,$status_filtro_combustivel,$status_filtro_cabine,$status_filtro_ar,$status_filtro_oleo,$km,$qtd_oleo,$cliente_codcliente,$veiculo_cod_veiculo) {
					$sql = $this->pdo->prepare("INSERT INTO servicos SET proxima_troca = :proxima_troca, filtro_combustivel = :filtro_combustivel,
					filtro_cabine =:filtro_cabine,obs_troca =:obs_troca,filtro_ar =:filtro_ar,data_troca=:data_troca,filtro_oleo=:filtro_oleo,tipo_oleo=:tipo_oleo,
					status_filtro_combustivel=:status_filtro_combustivel,status_filtro_cabine=:status_filtro_cabine,status_filtro_ar=:status_filtro_ar,status_filtro_oleo=:status_filtro_oleo,
					km=:km,qtd_oleo=:qtd_oleo,
					cliente_codcliente=:cliente_codcliente,veiculo_cod_veiculo=:veiculo_cod_veiculo");
					

					$sql->bindParam(":proxima_troca",$proxima_troca);
					$sql->bindParam(":filtro_combustivel",$filtro_combustivel);
					$sql->bindParam(":filtro_cabine",$filtro_cabine);
					$sql->bindParam(":obs_troca",$obs_troca);
					$sql->bindParam(":filtro_ar",$filtro_ar);
					$sql->bindParam(":data_troca",$data_troca);
					$sql->bindParam(":filtro_oleo",$filtro_oleo);
					$sql->bindParam(":tipo_oleo",$tipo_oleo);
					$sql->bindParam(":status_filtro_combustivel",$status_filtro_combustivel);
					$sql->bindParam(":status_filtro_cabine",$status_filtro_cabine);
					$sql->bindParam(":status_filtro_ar",$status_filtro_ar);
					$sql->bindParam(":status_filtro_oleo",$status_filtro_oleo);
					$sql->bindParam(":km",$km);
					$sql->bindParam(":qtd_oleo",$qtd_oleo);
					$sql->bindParam(":cliente_codcliente",$cliente_codcliente);
					$sql->bindParam(":veiculo_cod_veiculo",$veiculo_cod_veiculo);
					$sql->execute();
			
				/*
				print "<div class='alert alert-success' role='alert'>"
							echo 'Foi inserida a placa ' .$_POST["placa_veiculo"];

						"</div>"; 

				*/		

				//print '<script>window.setTimeout(function(){window.location=\'cad-troca.php\';}, 4000);</script>';
				
				?>
					<div class="alert alert-success" role="alert">
				<?php echo "Foi Realizada a troca de óleo para o veículo ". $_POST['placa_veiculo'];		
				?>
					</div>
				<?php 	

				//echo "Foi inserida a placa ". $_POST['placa_veiculo'];

				print '<script>window.setTimeout(function(){window.location=\'cad-troca.php\';}, 8000);</script>';

				} 		

				

		
					public function pesquisarCpf ( ) {

							if($_POST['pesquisar_cpf'] ) {
			
 							if (empty($_POST['cpf_cliente'])) {
 								//Se for vázio

 								print '<div class="alert alert-danger" role="alert">
									  Favor preencher o campo CPF!
									</div>';
								print '<script>window.setTimeout(function(){window.location=\'cad-troca.php\';}, 2000);</script>';
 								
 							} else {
 								
 								$sql= "SELECT * FROM cliente WHERE cpf_cliente like  '".$_POST['cpf_cliente']."' ";

 							}


 		 					$sql = $this->pdo->query($sql);

							if ($sql->rowCount() > 0) {

								//retorna todos os clientes
								return $sql ->fetchAll();

							}else {
								return array();
							}
				
					}		

			}




					public function pesquisar ( ) {

							if($_POST['pesquisar-placa'] ) {

 							if (empty($_POST['placa_veiculo'])) {
 								//Se for vázio

 								print '<div class="alert alert-danger" role="alert">
									  Favor preencher a placa do veiculo!
									</div>';
								print '<script>window.setTimeout(function(){window.location=\'cad-troca.php\';}, 2000);</script>';
 								
 							} else {
 								
 								$sql= "SELECT * FROM veiculo WHERE placa_veiculo like  '".$_POST['placa_veiculo']."' ";

 							}


 		 					$sql = $this->pdo->query($sql);

							if ($sql->rowCount() > 0) {

								//retorna todos os clientes
								return $sql ->fetchAll();

							}else {
								return array();
							}
				
					}		

			}
			
					public function PesquisarCpfCliente ( ) {

							if($_POST['pesquisar'] ) {

			
 							if (empty($_POST['cpf_cliente'])) {
 								//Se for vázio

 								print '<div class="alert alert-danger" role="alert">
									  Favor preencher o CPF/CNPJ do cliente!
									</div>';
								print '<script>window.setTimeout(function(){window.location=\'cad-troca.php\';}, 2000);</script>';
 								
 							} else {
 								
 								$sql =" select  c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, c.telefone1_cliente,c.telefone2_cliente,
 								c.rg_cliente,c.data_nascimento_cliente,c.sexo_cliente,c.cidade_cliente,c.uf_cliente,c.bairro_cliente,c.numero_rua_cliente,c.rua_cliente,c.codcliente,v.tipo_veiculo,v.cod_veiculo, v.fabricante_veiculo, v.modelo_veiculo,v.placa_veiculo FROM cliente AS c
								JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente WHERE c.cpf_cliente like '%".$_POST['cpf_cliente']."%' order by v.placa_veiculo desc; ";  ;

 							}

 							


 		 					$sql = $this->pdo->query($sql);

							if ($sql->rowCount() > 0) {

								//retorna todos os clientes
								return $sql ->fetchAll();

							}else {
								return array();
							}
				
					}		

			}



			public function PesquisarTrocaOleo ( ) {

							if($_POST['pesquisar-troca'] ) {

							//$pesquisar= $_POST['cpf_cliente'];
							// preg_replace('/[^0-9]/', '', $pesquisar);
			
 							if (empty($_POST['troca-oleo'])) {
 								//Se for vázio

 								print '<div class="alert alert-danger" role="alert">
									  Favor preencher a placa do veiculo!
									</div>';
								print '<script>window.setTimeout(function(){window.location=\'index.php\';}, 2000);</script>';
 								
 							} else {
 								
 								$sql =" select 
								c.nome_cliente,c.sobrenome_cliente,cod_veiculo, v.placa_veiculo,v.modelo_veiculo,
								s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
								s.filtro_oleo,data_troca,proxima_troca,
								s.tipo_oleo,s.status_filtro_combustivel,
								s.status_filtro_cabine,s.status_filtro_ar,
								s.status_filtro_oleo,s.km,s.qtd_oleo
								FROM servicos s
								INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
								INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
								WHERE v.placa_veiculo like '%".$_POST['troca-oleo']."%' order by s.data_troca desc; ";  ;

 							}

 							


 		 					$sql = $this->pdo->query($sql);

							if ($sql->rowCount() > 0) {

								//retorna todos os clientes
								return $sql ->fetchAll();

							}else {
								return array();
							}
				
					}		

			}
				/*
				Função que mostra as datas que estão 
				proximas a vencer e são exibidas no
				dashboard
				*/

			public function DataVencimento() {
					
					/*

					return $this->pdo->query("select c.nome_cliente,c.sobrenome_cliente, v.placa_veiculo,v.modelo_veiculo,
								s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
								s.filtro_oleo,s.proxima_troca,s.data_troca,s.tipo_oleo,s.status_filtro_combustivel,
								s.status_filtro_cabine,s.status_filtro_ar,s.status_filtro_oleo,s.km,s.qtd_oleo
								FROM servicos s
								INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
								INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
								where   proxima_troca between now() - interval 30 day AND now();
								")
							->fetchAll();	
							
					*/


							return $this->pdo->query(" select 
								veiculo_cod_veiculo, v.placa_veiculo,v.tipo_veiculo,v.modelo_veiculo,
								c.nome_cliente,c.sobrenome_cliente,
								max(proxima_troca) from servicos s  
								INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
								INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
						        where 
						        proxima_troca between now() - interval 30 day AND now() < current_date()
								group by veiculo_cod_veiculo, nome_cliente, sobrenome_cliente having max(proxima_troca)
								 < current_date()  ")
							->fetchAll();	
					

							


				}


			
	}