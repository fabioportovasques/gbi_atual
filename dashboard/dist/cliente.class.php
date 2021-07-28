
<!DOCTYPE html>
<html>
<head>
	   <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="img/oleo.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title></title>

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script> 

</head>
<body>

</body>
</html>

<?php 

class Cliente {

	private $pdo;

	public function __construct( ) {

		//conexão banco de dados

		$this -> pdo = new PDO("mysql:dbname=db-gbi;host=localhost","root","F@bio102030");
	
		}

		//create



		public function adicionar ($nome_cliente,$sobrenome_cliente,$telefone1_cliente,$telefone2_cliente,
			$cpf_cliente,$rg_cliente,$rua_cliente,$numero_rua_cliente,$cidade_cliente,$uf_cliente,$data_nascimento_cliente,$sexo_cliente,$bairro_cliente,$cep_cliente) {
			if($this->verificaCpf($cpf_cliente) == false) {
					$sql = $this->pdo->prepare("INSERT INTO cliente SET nome_cliente = :nome_cliente, sobrenome_cliente = :sobrenome_cliente,
					telefone1_cliente =:telefone1_cliente,telefone2_cliente =:telefone2_cliente,cpf_cliente =:cpf_cliente,rg_cliente=:rg_cliente,rua_cliente=:rua_cliente,
					numero_rua_cliente=:numero_rua_cliente,cidade_cliente=:cidade_cliente,uf_cliente=:uf_cliente,data_nascimento_cliente=:data_nascimento_cliente,
					sexo_cliente=:sexo_cliente,bairro_cliente=:bairro_cliente,cep_cliente=:cep_cliente");
					

					$sql->bindParam(":nome_cliente",$nome_cliente);
					$sql->bindParam(":sobrenome_cliente",$sobrenome_cliente);
					$sql->bindParam(":telefone1_cliente",$telefone1_cliente);
					$sql->bindParam(":telefone2_cliente",$telefone2_cliente);
					$sql->bindParam(":cpf_cliente",$cpf_cliente);
					$sql->bindParam(":rg_cliente",$rg_cliente);
					$sql->bindParam(":rua_cliente",$rua_cliente);
					$sql->bindParam(":numero_rua_cliente",$numero_rua_cliente);
					$sql->bindParam(":cidade_cliente",$cidade_cliente);
					$sql->bindParam(":uf_cliente",$uf_cliente);
					$sql->bindParam(":data_nascimento_cliente",$data_nascimento_cliente);
					$sql->bindParam(":sexo_cliente",$sexo_cliente);
					$sql->bindParam(":bairro_cliente",$bairro_cliente);
					$sql->bindParam(":cep_cliente",$cep_cliente);
					$sql->execute();
			
				print '<div class="alert alert-success" role="alert">
						  Inserido Com Sucesso!
						</div>';
				print '<script>window.setTimeout(function(){window.location=\'cad-cliente.php\';}, 2000);</script>';

				} else {
					
				print '<div class="alert alert-warning" role="alert">
						CPF Já Existe!
						</div>';
				print '<script>window.setTimeout(function(){window.location=\'cad-cliente.php\';}, 2000);</script>';


				}


		
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
			$sql = "SELECT * FROM cliente where nome_cliente = 'fabio geovane' ";
			//Não precisa do prepare, pq não retorna parametro
			$sql = $this->pdo->query($sql);

			if ($sql->rowCount() > 0) {

				//retorna todos os clientes
				return $sql ->fetchAll();

			}else {
				return array();
			}


		}

		//Função para comparar data do banco

		public function GetData() {
			$sql = "SELECT * FROM servicos";
			//Não precisa do prepare, pq não retorna parametro
			$data_inicial = \DateTime::createFromFormat('d/m/Y', 'proxima_data'); 
			$data_final = new DateTime(); // Salva o timestamp atual numa variável
			$diferenca = $data_final->diff($data_inicial);
			
			$sql = $this->pdo->query($sql);

			if ($sql->rowCount() > 0) {

				//retorna todos os clientes
				return $sql ->fetchAll();

			}else {
				return array();
			}


		}

		public function editar ( ) {


					if (empty($_POST['cpf_cliente'])) {
						//Se for vázio

						print '<div class="alert alert-danger" role="alert">
						  Favor preencher o CPF!
						</div>';
						print '<script>window.setTimeout(function(){window.location=\'cons-cliente.php\';}, 2000);</script>';
						
					} else {

					//pega o cod que se deseja modificar
				    $cpf_cliente = $_POST["cpf_cliente"];
				    //O novo valor do campo a ser modificado
				    $nome_cliente = $_POST["nome_cliente"];
				    $sobrenome_cliente = $_POST['sobrenome_cliente'];
					$telefone1_cliente = $_POST['telefone1_cliente'];
					$telefone2_cliente= $_POST['telefone2_cliente'];
					$cpf_cliente = $_POST['cpf_cliente'];
					$rg_cliente = $_POST['rg_cliente'];
					$rua_cliente = $_POST['rua_cliente'];
					$numero_rua_cliente = $_POST['numero_rua_cliente'];
					$cidade_cliente = $_POST['cidade_cliente'];
					$uf_cliente = $_POST['uf_cliente'];
					$data_nascimento_cliente = $_POST['data_nascimento_cliente'];
					$sexo_cliente = $_POST['sexo_cliente'];
					$bairro_cliente = $_POST['bairro_cliente'];
					$cep_cliente = $_POST['cep_cliente'];


				    // 
				        //defino os parâmetros de conexão com o banco de dados
				        //$pdo = new PDO('mysql:host=localhost;dbname=bd-gbi', $username, $password);
				        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				        //preparo minha query
				    	$sql = "UPDATE cliente SET  nome_cliente = :nome_cliente, sobrenome_cliente = :sobrenome_cliente,
					telefone1_cliente =:telefone1_cliente,telefone2_cliente =:telefone2_cliente,cpf_cliente =:cpf_cliente,rg_cliente=:rg_cliente,rua_cliente=:rua_cliente,
					numero_rua_cliente=:numero_rua_cliente,cidade_cliente=:cidade_cliente,uf_cliente=:uf_cliente,data_nascimento_cliente=:data_nascimento_cliente,
					sexo_cliente=:sexo_cliente,bairro_cliente=:bairro_cliente,cep_cliente=:cep_cliente WHERE cpf_cliente = :cpf_cliente";
						$sql = $this->pdo->prepare($sql);
						$sql->bindValue(':nome_cliente', $nome_cliente);
						$sql->bindParam(":sobrenome_cliente",$sobrenome_cliente);
						$sql->bindParam(":telefone1_cliente",$telefone1_cliente);
						$sql->bindParam(":telefone2_cliente",$telefone2_cliente);
						$sql->bindParam(":cpf_cliente",$cpf_cliente);
						$sql->bindParam(":rg_cliente",$rg_cliente);
						$sql->bindParam(":rua_cliente",$rua_cliente);
						$sql->bindParam(":numero_rua_cliente",$numero_rua_cliente);
						$sql->bindParam(":cidade_cliente",$cidade_cliente);
						$sql->bindParam(":uf_cliente",$uf_cliente);
						$sql->bindParam(":data_nascimento_cliente",$data_nascimento_cliente);
						$sql->bindParam(":sexo_cliente",$sexo_cliente);
						$sql->bindParam(":bairro_cliente",$bairro_cliente);
						$sql->bindParam(":cep_cliente",$cep_cliente);

						$sql->execute();

				        

						print '<div class="alert alert-success" role="alert">
							  Atualizado com Sucesso!
							</div>';
						print '<script>window.setTimeout(function(){window.location=\'cons-cliente.php\';}, 2000);</script>';

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

							if($_POST['pesquisar'] ) {

							//$pesquisar= $_POST['cpf_cliente'];
							// preg_replace('/[^0-9]/', '', $pesquisar);
			
 							if (empty($_POST['cpf_cliente'])) {
 								//Se for vázio

 								print '<div class="alert alert-danger" role="alert">
									  Favor preencher o campo CPF!
									</div>';
								print '<script>window.setTimeout(function(){window.location=\'cons-cliente.php\';}, 2000);</script>';
 								
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

			public function pesquisar_veiculo ( ) {

							if($_POST['pesquisar'] ) {

							//echo "chegamos aqui";	

							//$pesquisar= $_POST['cpf_cliente'];
							// preg_replace('/[^0-9]/', '', $pesquisar);
			
 							if (empty($_POST['cpf_cliente'])) {
 								//Se for vázio

 								print '<div class="alert alert-danger" role="alert">
									  Favor preencher o campo CPF do proprietario!
									</div>';
								print '<script>window.setTimeout(function(){window.location=\'cons-veiculo.php\';}, 2000);</script>';
 								
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
			

	
					public function PesquisarPlacaVeiculo ( ) {

							if($_POST['pesquisar'] ) {

							//$pesquisar= $_POST['cpf_cliente'];
							// preg_replace('/[^0-9]/', '', $pesquisar);
			
 							if (empty($_POST['placa_veiculo'])) {
 								//Se for vázio

 								print '<div class="alert alert-danger" role="alert">
									  Favor preencher a placa do veiculo!
									</div>';
								print '<script>window.setTimeout(function(){window.location=\'index.php\';}, 2000);</script>';
 								
 							} else {
 								
 								$sql =" select  c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, v.tipo_veiculo, v.fabricante_veiculo, v.modelo_veiculo,v.placa_veiculo FROM cliente AS c
								JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente WHERE v.placa_veiculo like '%".$_POST['placa_veiculo']."%' order by v.placa_veiculo desc; ";  ;

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
								print '<script>window.setTimeout(function(){window.location=\'index.php\';}, 2000);</script>';
 								
 							} else {
 								
 								$sql =" select  c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, v.tipo_veiculo, v.fabricante_veiculo, v.modelo_veiculo,v.placa_veiculo FROM cliente AS c
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

	}