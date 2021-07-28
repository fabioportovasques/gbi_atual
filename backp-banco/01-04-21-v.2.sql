select * FROM servicos;
select * from cliente where nome_cliente = "manoel martin";
select * from veiculo;

SELECT c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, v.tipo_veiculo, v.fabricante_veiculo, v.modelo_veiculo,v.placa_veiculo
FROM cliente AS c
JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente;

SELECT c.nome_cliente,c.sobrenome_cliente, v.placa_veiculo,v.modelo_veiculo,
s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
s.filtro_oleo,data_troca,proxima_troca
FROM servicos s
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo; 
