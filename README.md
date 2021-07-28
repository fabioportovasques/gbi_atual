# gbi

/*

	Essa Query retorna   as datas vencidas que 
   	são menores que hoje e que não possuem data de troca superior
	Porém para rodar no phpmyadmin é preciso desabilitar uma variavel 
	que por default vem habilitada, essa variavel não permite executar o grup by em 
	subconsultas
	(está lá em variáveis > sql_mode > ONLY_FULL_GROUP_BY)


  SELECT
                      p.cod AS 'cod_veiculo', v.placa_veiculo AS 'placa',
                        v.tipo_veiculo AS 'tipo', v.modelo_veiculo AS 'modelo',
                        c.nome_cliente AS 'nome', c.sobrenome_cliente AS 'sobrenome',
                        c.telefone1_cliente AS 'telefone1',
                        p.fil AS 'filtro_combustivel', p.pro AS 'proxima_troca'
                    FROM
                      (SELECT
                          veiculo_cod_veiculo AS cod, filtro_combustivel AS fil,
                          cliente_codcliente AS cli, max(proxima_troca) AS pro
                         FROM
                          servicos GROUP BY veiculo_cod_veiculo) p
                        INNER JOIN cliente c
                        ON p.cli = c.codcliente
                        INNER JOIN veiculo v
                        ON p.cod = v.cod_veiculo
                    WHERE
                      p.pro < CURRENT_DATE

*/
