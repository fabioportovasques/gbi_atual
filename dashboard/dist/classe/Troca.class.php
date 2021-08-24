<?php
session_start();
require '../../config.php';
if(empty($_SESSION['lg'])) {
    header("Location: ../../index.php");
    exit; 
}   
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>




</head>
<body>

</body>
</html>

<?php
class Troca {

	private $pdo;

	public function __construct() {
		$this->pdo = new PDO("mysql:dbname=db-gbi;host=localhost", "root", "F@bio102030");
	}
	public function getInfo($cod_veiculo) {
		
		/*

		$sql = "

		

		 select
                      p.cod AS 'cod_veiculo', codcliente, cod_servicos,v.placa_veiculo AS 'placa',
                        v.tipo_veiculo AS 'tipo', v.modelo_veiculo AS 'modelo',
                        c.nome_cliente AS 'nome', c.sobrenome_cliente AS 'sobrenome',
                        c.telefone1_cliente AS 'telefone1',
                        p.fil AS 'filtro_combustivel',filtro_cabine,status_filtro_cabine, filtro_ar,filtro_oleo,tipo_oleo,status_filtro_combustivel,status_filtro_ar,
                        status_filtro_oleo,
                        qtd_oleo, obs_troca,km,data_troca,p.pro AS 'proxima_troca'
                    FROM
                      (SELECT
                          veiculo_cod_veiculo AS cod,cod_servicos, filtro_combustivel AS fil,filtro_cabine,
                          filtro_ar,filtro_oleo,tipo_oleo,status_filtro_cabine,status_filtro_combustivel,status_filtro_oleo,status_filtro_ar,qtd_oleo,obs_troca,km,data_troca,
                          cliente_codcliente AS cli, max(proxima_troca) AS pro
                         FROM
                          servicos GROUP BY veiculo_cod_veiculo) p
                        INNER JOIN cliente c
                        ON p.cli = c.codcliente
                        INNER JOIN veiculo v
                        ON p.cod = v.cod_veiculo 

		
		*/


     $sql = " 
     
     	  select 
				c.nome_cliente,c.sobrenome_cliente,cod_veiculo, v.placa_veiculo,v.modelo_veiculo,
				s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
				s.filtro_oleo,data_troca,proxima_troca,
				s.tipo_oleo,s.status_filtro_combustivel,
				s.status_filtro_cabine,s.status_filtro_ar,
				s.status_filtro_oleo,s.km,s.qtd_oleo,s.cod_servicos,codcliente
				FROM servicos s
				INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
				INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo

		 WHERE cod_veiculo = :cod_veiculo order by proxima_troca desc " ;
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':cod_veiculo',$cod_veiculo);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	}

	public function exibirProprietario ($cod_veiculo ) {

			$sql =" 
		select  c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, v.tipo_veiculo,v.cor_veiculo, v.fabricante_veiculo, v.modelo_veiculo,
		v.placa_veiculo,codcliente
		FROM  cliente  AS c 
		JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente


		 WHERE cod_veiculo = :cod_veiculo  " ;
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':cod_veiculo',$cod_veiculo);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	

	}

	}

	
    

