
<!DOCTYPE html>
<html>
<head>
	<title></title>

		<!--links bootstrap-->      
        <link href="css/styles.css" rel="stylesheet"/>      
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>

</body>
</html>

<?php 

class Veiculo {

	private $pdo;

	public function __construct( ) {

		//conexão banco de dados

		$this -> pdo = new PDO("mysql:dbname=db-gbi;host=localhost","root","F@bio102030");
	
		}

		//create



		public function adicionar ($placa_veiculo,$tipo_veiculo,$cor_veiculo,$modelo_veiculo,
			$fabricante_veiculo,$ano_fabricacao_veiculo,$km_veiculo,$obs_veiculo,$cliente_codcliente) {
			//if($this->verificaPlaca($cpf_cliente) == false) {
					$sql = $this->pdo->prepare("INSERT INTO veiculo SET placa_veiculo = :placa_veiculo, tipo_veiculo = :tipo_veiculo,
					cor_veiculo =:cor_veiculo,modelo_veiculo =:modelo_veiculo,fabricante_veiculo =:fabricante_veiculo,
					ano_fabricacao_veiculo=:ano_fabricacao_veiculo,km_veiculo=:km_veiculo,obs_veiculo=:obs_veiculo,cliente_codcliente=:cliente_codcliente");
					

					$sql->bindParam(":placa_veiculo",$placa_veiculo);
					$sql->bindParam(":tipo_veiculo",$tipo_veiculo);
					$sql->bindParam(":cor_veiculo",$cor_veiculo);
					$sql->bindParam(":modelo_veiculo",$modelo_veiculo);
					$sql->bindParam(":fabricante_veiculo",$fabricante_veiculo);
					$sql->bindParam(":ano_fabricacao_veiculo",$ano_fabricacao_veiculo);
					$sql->bindParam(":km_veiculo",$km_veiculo);
					$sql->bindParam(":obs_veiculo",$obs_veiculo);
					$sql->bindParam(":cliente_codcliente",$cliente_codcliente);
					$sql->execute();
			
				print '<div class="alert alert-success" role="alert">
						  Inserido Com Sucesso!
						</div>';
				print '<script>window.setTimeout(function(){window.location=\'cad-veiculo.php\';}, 2000);</script>';

				
		
		}

		public function getNome($cpf) {

			$sql = "SELECT cpf FROM  cliente WHERE cpf = :cpf";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':cpf', $cpf);
			$sql->execute();

			//Verifica se encontrou algum registro

			if ($sql->rowCount() > 0  ) {

				$info = $sql->fetch();

				return $info['cpf'];

			} else {
				return '';
			}
		}

		//Listar todos os clientes

		public function getAll() {
			$sql = "SELECT * FROM cliente WHERE codcliente = '59'";
			//Não precisa do prepare, pq não retorna parametro
			$sql = $this->pdo->query($sql);

			if ($sql->rowCount() > 0) {

				//retorna todos os clientes
				return $sql ->fetchAll();

			}else {
				return array();
			}
		}


	public function editar ( ) {


					if (empty($_POST['placa_veiculo'])) {
						//Se for vázio

						print '<div class="alert alert-danger" role="alert">
						  Favor preencher a Placa do Veículo!
						</div>';
						print '<script>window.setTimeout(function(){window.location=\'cons-veiculo.php\';}, 2000);</script>';
						
					} else {

					//pega o cod que se deseja modificar
				    $placa_veiculo = $_POST["placa_veiculo"];
				    //O novo valor do campo a ser modificado
				    $tipo_veiculo = $_POST["tipo_veiculo"];
				    $cor_veiculo = $_POST["cor_veiculo"];
					$modelo_veiculo = $_POST['modelo_veiculo'];
					$fabricante_veiculo= $_POST['fabricante_veiculo'];
					$ano_fabricacao_veiculo = $_POST['ano_fabricacao_veiculo'];
					$km_veiculo = $_POST['km_veiculo'];
					$obs_veiculo = $_POST['obs_veiculo'];
					$cliente_codcliente = $_POST['cliente_codcliente'];
					
				    //$sql = "UPDATE veiculo SET  tipo_veiculo = :tipo_veiculo WHERE placa_veiculo = :placa_veiculo ";
				    $sql = "UPDATE veiculo SET  placa_veiculo = :placa_veiculo, tipo_veiculo = :tipo_veiculo,
					cor_veiculo =:cor_veiculo,modelo_veiculo =:modelo_veiculo,fabricante_veiculo =:fabricante_veiculo,
					ano_fabricacao_veiculo=:ano_fabricacao_veiculo,km_veiculo=:km_veiculo,obs_veiculo=:obs_veiculo,cliente_codcliente=:cliente_codcliente where placa_veiculo = :placa_veiculo";

					$sql = $this->pdo->prepare($sql);
					$sql->bindParam(":placa_veiculo",$placa_veiculo);
					$sql->bindParam(":tipo_veiculo",$tipo_veiculo);
					$sql->bindParam(":cor_veiculo",$cor_veiculo);
					$sql->bindParam(":modelo_veiculo",$modelo_veiculo);
					$sql->bindParam(":fabricante_veiculo",$fabricante_veiculo);
					$sql->bindParam(":ano_fabricacao_veiculo",$ano_fabricacao_veiculo);
					$sql->bindParam(":km_veiculo",$km_veiculo);
					$sql->bindParam(":obs_veiculo",$obs_veiculo);
					$sql->bindParam(":cliente_codcliente",$cliente_codcliente);
					$sql->execute();

				        

						print '<div class="alert alert-success" role="alert">
							  Atualizado com Sucesso!
							</div>';
						print '<script>window.setTimeout(function(){window.location=\'cons-veiculo.php\';}, 2000);</script>';

					}
					
					
	}		


		public function excluir($cpf_cliente ) {
			if ($this->existeCpf($cpf)) {
				$sql = "DELETE FROM cliente WHERE cpf = :cpf";
				$sql = $this->pdo->prepare($sql);
				$sql -> bindValue(':nome_cliente',$nome);
				$sql -> bindValue(':sobrenome_cliente',$sobrenome_cliente);
				$sql -> bindValue(':telefone1_cliente',$telefone1_cliente);
				$sql -> bindValue(':telefone2_cliente',$telefone2_cliente);
				$sql -> bindValue(':rg_cliente',$rg_cliente);
				$sql -> bindValue(':rua_cliente',$rua_cliente);
				$sql -> bindValue(':numero_rua_cliente',$numero_rua_cliente);
				$sql -> bindValue(':cidade_cliente',$cidade_cliente);
				$sql -> bindValue(':uf_cliente',$uf_cliente);
				$sql -> bindValue(':pais_cliente',$pais_cliente);
				$sql -> bindValue(':data_nascimento_cliente',$data_nascimento_cliente);
				$sql -> bindValue(':sexo_cliente',$sexo_cliente);
				$sql -> bindValue(':bairro_cliente',$bairro_cliente);
				$sql ->execute();

				return true; //indica que foi deletado

			}else {
				return false;

			}
		}

		public function getInfo($codcliente) {
		$sql = "SELECT * FROM contatos WHERE codcliente = :codcliente";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':codcliente',$codcliente);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	}

		private function verificaCpf ($cpf_cliente) {

			$sql = "SELECT * FROM cliente WHERE cpf_cliente = :cpf_cliente";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':cpf_cliente', $cpf_cliente);
			$sql->execute();

			if($sql->rowCount() > 0) {
				return true;
			} else {
				return false;
			}


		}


		public function pesquisar ( ) {

							if($_POST['pesquisar_placa'] ) {

 							if (empty($_POST['placa_veiculo'])) {
 								//Se for vázio

 								print '<div class="alert alert-danger" role="alert">
									  Favor preencher a placa do veiculo!
									</div>';
								print '<script>window.setTimeout(function(){window.location=\'cons-veiculo.php\';}, 2000);</script>';
 								
 							} else {
 								
 								$sql= "select  c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, v.tipo_veiculo,v.cor_veiculo, v.fabricante_veiculo,
 								 v.modelo_veiculo,v.placa_veiculo,ano_fabricacao_veiculo,v.cliente_codcliente
									FROM cliente AS c
									JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente
 								 WHERE placa_veiculo like  '".$_POST['placa_veiculo']."' ";

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
			

	}