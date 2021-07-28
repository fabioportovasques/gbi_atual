select * from cliente;
select * from veiculo;
select * from servicos;

SELECT nome_cliente,sobrenome_cliente, placa_veiculo,modelo_veiculo,data_troca, proxima_troca, filtro_cabine
FROM servicos s
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo;