

<?php 

class Servico {

	private $pdo;

	public function __construct( ) {

		//conexão banco de dados

		$this -> pdo = new PDO("mysql:dbname=db-gbi;host=localhost","root","F@bio102030");
	
		}

		

		//Função para comparar data do banco

		
		public function GetData() {
					
			

							return $this->pdo->query("select veiculo_cod_veiculo, v.placa_veiculo,
							v.tipo_veiculo,v.modelo_veiculo,c.nome_cliente,c.sobrenome_cliente,
							max(proxima_troca) from servicos s   INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
							INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
							 group by veiculo_cod_veiculo, nome_cliente, sobrenome_cliente having max(proxima_troca)
							 < current_date;
								")
							->fetchAll();	
							
				}


				public function DataVencimento() {
					/*
					return $this->pdo->query("select veiculo_cod_veiculo, v.placa_veiculo,
							v.tipo_veiculo,v.modelo_veiculo,c.nome_cliente,c.sobrenome_cliente,
							max(proxima_troca) from servicos s   INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
							INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
							 group by veiculo_cod_veiculo, nome_cliente, sobrenome_cliente having max(proxima_troca)
							 > current_date;
								")
							->fetchAll();	
							
					*/

						
				}

		}