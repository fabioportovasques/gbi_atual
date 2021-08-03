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
		$sql = "

		 select
                      p.cod AS 'cod_veiculo', v.placa_veiculo AS 'placa',
                        v.tipo_veiculo AS 'tipo', v.modelo_veiculo AS 'modelo',
                        c.nome_cliente AS 'nome', c.sobrenome_cliente AS 'sobrenome',
                        c.telefone1_cliente AS 'telefone1',
                        p.fil AS 'filtro_combustivel',filtro_cabine,status_filtro_cabine, filtro_ar,filtro_oleo,tipo_oleo,status_filtro_combustivel,status_filtro_ar,
                        status_filtro_oleo,
                        qtd_oleo, obs_troca,km,data_troca,p.pro AS 'proxima_troca'
                    FROM
                      (SELECT
                          veiculo_cod_veiculo AS cod, filtro_combustivel AS fil,filtro_cabine,
                          filtro_ar,filtro_oleo,tipo_oleo,status_filtro_cabine,status_filtro_combustivel,status_filtro_oleo,status_filtro_ar,qtd_oleo,obs_troca,km,data_troca,
                          cliente_codcliente AS cli, max(proxima_troca) AS pro
                         FROM
                          servicos GROUP BY veiculo_cod_veiculo) p
                        INNER JOIN cliente c
                        ON p.cli = c.codcliente
                        INNER JOIN veiculo v
                        ON p.cod = v.cod_veiculo
                                       

		 WHERE cod_veiculo = :cod_veiculo";
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