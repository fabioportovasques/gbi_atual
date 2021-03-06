select * from servicos;
select * from veiculo;
select * from cliente;

select  * from cliente WHERE nome_cliente = 'fabio geovane';

SELECT * FROM servicos WHERE proxima_data = '2022-04-06';

SELECT c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, v.tipo_veiculo,v.cor_veiculo, v.fabricante_veiculo, v.modelo_veiculo,v.placa_veiculo
FROM cliente AS c
JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente;


select s.cod_servicos,s.proxima_troca,s.data_troca,s.km, v.placa_veiculo
FROM servicos s
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo where proxima_troca <= current_date ;

select c.nome_cliente, c.sobrenome_cliente,s.proxima_troca,v.placa_veiculo
FROM servicos s
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo where proxima_troca <= current_date ;





select c.nome_cliente,c.sobrenome_cliente, v.placa_veiculo,v.modelo_veiculo,
s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
s.filtro_oleo,s.proxima_troca,s.data_troca,s.tipo_oleo,s.status_filtro_combustivel,
s.status_filtro_cabine,s.status_filtro_ar,s.status_filtro_oleo,s.km,s.qtd_oleo
FROM servicos s
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo ;

/*
Selecionar apenas um registro da tabela que contém data menor que a atual
*/


select 
c.nome_cliente,c.sobrenome_cliente, v.placa_veiculo,v.modelo_veiculo,
s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
s.filtro_oleo,data_troca,proxima_troca,
s.tipo_oleo,s.status_filtro_combustivel,
s.status_filtro_cabine,s.status_filtro_ar,
s.status_filtro_oleo,s.km,s.qtd_oleo
FROM servicos s  
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo where proxima_troca <= current_date ORDER BY data_troca DESC LIMIT 1;