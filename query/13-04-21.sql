select * from servicos;
select * from veiculo;
select * from cliente;

select  * from cliente WHERE nome_cliente = 'fabio geovane';

SELECT * FROM servicos WHERE proxima_data = '2022-04-06';

/*testando essa query*/
SELECT c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, v.tipo_veiculo,v.cor_veiculo, v.fabricante_veiculo, v.modelo_veiculo,v.placa_veiculo
FROM  cliente  AS c 
JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente;


	select s.cod_servicos, c.nome_cliente,c.sobrenome_cliente, v.placa_veiculo,v.modelo_veiculo,
	s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
	s.filtro_oleo,s.proxima_troca,s.data_troca,s.tipo_oleo,s.status_filtro_combustivel,
	s.status_filtro_cabine,s.status_filtro_ar,s.status_filtro_oleo,s.km,s.qtd_oleo
	FROM servicos s
	INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
	INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo;

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
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo where proxima_troca <= current_date;







/*testando essa query*/
SELECT c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, v.tipo_veiculo,v.cor_veiculo, v.fabricante_veiculo, v.modelo_veiculo,v.placa_veiculo
FROM  cliente  AS c 
JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente;

select  veiculo_cod_veiculo, 
max(proxima_troca) from servicos group by veiculo_cod_veiculo having max(proxima_troca) > current_date();

select veiculo_cod_veiculo, max(proxima_troca) from servicos group by veiculo_cod_veiculo having max(proxima_troca) > current_date;




/*Funcionando*/
	select veiculo_cod_veiculo,
	max(proxima_troca) from servicos
	 group by veiculo_cod_veiculo having max(proxima_troca)
	 < current_date;

/*funcionando2*/
	select veiculo_cod_veiculo, v.placa_veiculo,v.tipo_veiculo,v.modelo_veiculo,
	max(proxima_troca) from servicos s   INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
	INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
	 group by veiculo_cod_veiculo having max(proxima_troca)
	 < current_date;
     
     /*teste group by com varias colunas*/
		select proxima_troca,data_troca,cod_servicos
        FROM  servicos 
        group by proxima_troca,data_troca,cod_servicos
        having max(proxima_troca) < current_date()
	 ; 
	
    /*
    teste2 
    */
     /*
     Funcionando agupamento de datas de trocas vencidas
     */
     select veiculo_cod_veiculo, v.placa_veiculo,v.tipo_veiculo,v.modelo_veiculo,
     c.nome_cliente,c.sobrenome_cliente,
	max(proxima_troca) from servicos s   INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
	INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
	 group by veiculo_cod_veiculo, nome_cliente, sobrenome_cliente having max(proxima_troca)
	 < current_date;
     
      


/*
somar valores
*/
SELECT min(proxima_troca) AS Data
FROM servicos WHERE proxima_troca < current_date();

/*
retorna o mes da data
*/

select proxima_troca , month(proxima_troca) from servicos;

/*
funcionando Query  para retornar os veiculos que faltam 30 dias para vencimento
*/
select c.nome_cliente,c.sobrenome_cliente, v.placa_veiculo,v.modelo_veiculo,
s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
s.filtro_oleo,s.proxima_troca,s.data_troca,s.tipo_oleo,s.status_filtro_combustivel,
s.status_filtro_cabine,s.status_filtro_ar,s.status_filtro_oleo,s.km,s.qtd_oleo
FROM servicos s
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
where   proxima_troca between now() - interval 30 day AND now() ;


/*
teste Query  para retornar os veiculos que faltam 30 dias para vencimento teste...
*/

/*
Funcionando vencimento menor do que 30 dias ok
*/
     select veiculo_cod_veiculo, v.placa_veiculo,v.tipo_veiculo,v.modelo_veiculo,
		c.nome_cliente,c.sobrenome_cliente,
		max(proxima_troca) from servicos s  
		INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
		INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
        where 
        proxima_troca between now() - interval 40 day AND now() < current_date()
		group by veiculo_cod_veiculo, nome_cliente, sobrenome_cliente having max(proxima_troca) < current_date()
		
	;

 
/*
teste query para selecionar veiculos que faltam 30 dias para vencimento
*/

  select veiculo_cod_veiculo, v.placa_veiculo,v.tipo_veiculo,v.modelo_veiculo,
     c.nome_cliente,c.sobrenome_cliente,
	max(proxima_troca) from servicos s   
    INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
	INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
	 
	where   proxima_troca between now() - interval 30 day AND now() 
;

/*
teste query para selecionar veiculos que faltam 30 dias para vencimento
*/

select c.nome_cliente,c.sobrenome_cliente, v.placa_veiculo,v.modelo_veiculo,
s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
s.filtro_oleo,s.proxima_troca,s.data_troca,s.tipo_oleo,s.status_filtro_combustivel,
s.status_filtro_cabine,s.status_filtro_ar,s.status_filtro_oleo,s.km,s.qtd_oleo,max(proxima_troca)
FROM servicos s
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo

where   proxima_troca between now() - interval 30 day AND now()   
group by  proxima_troca having  max(proxima_troca);

/*
Função para comparar duas datas
*/
SELECT  DATEDIFF(current_date, proxima_troca) AS 'dias para vencimento'  
    FROM servicos; 

/*

Somar valores
*/

select  COUNT(*) , c.nome_cliente,c.sobrenome_cliente, v.placa_veiculo,v.modelo_veiculo,
s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
s.filtro_oleo,s.proxima_troca,s.data_troca,s.tipo_oleo,s.status_filtro_combustivel,
s.status_filtro_cabine,s.status_filtro_ar,s.status_filtro_oleo,s.km,s.qtd_oleo
FROM servicos s 
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
;



SELECT COUNT(*) as c FROM servicos ;

/*
Funcionando contador de quantas trocas faltam menos de 30 dias para o vcmto
*/

select 
veiculo_cod_veiculo, v.placa_veiculo,v.tipo_veiculo,v.modelo_veiculo,Count(placa_veiculo) as vencer,
c.nome_cliente,c.sobrenome_cliente,
max(proxima_troca) from servicos s  
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
	where 
	proxima_troca between now() - interval 30 day AND now() < current_date()
group by veiculo_cod_veiculo, nome_cliente, sobrenome_cliente having max(proxima_troca)
 < current_date() ;


/*
	teste contador de trocas vencidas

*/
SELECT max(proxima_troca) from servicos
where
proxima_troca < current_date();



select veiculo_cod_veiculo, v.placa_veiculo,
v.tipo_veiculo,v.modelo_veiculo,c.nome_cliente,c.sobrenome_cliente, count(*) as vencidas,
max(proxima_troca) from servicos s   INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
 group by veiculo_cod_veiculo, nome_cliente, sobrenome_cliente having max(proxima_troca)
 < current_date
;




/*
TESTANDO
*/


		
select veiculo_cod_veiculo, v.placa_veiculo,v.tipo_veiculo,v.modelo_veiculo,
c.nome_cliente,c.sobrenome_cliente,s.filtro_combustivel,
	max(proxima_troca) 
from servicos s   
	INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
	INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
where  s.proxima_troca < current_date()
	group by veiculo_cod_veiculo, nome_cliente, sobrenome_cliente,s.filtro_combustivel
 having max(proxima_troca)
 ;

       
select veiculo_cod_veiculo, v.placa_veiculo,
 v.tipo_veiculo, v.modelo_veiculo, c.nome_cliente,
 c.sobrenome_cliente, s.filtro_combustivel, s.proxima_troca
from servicos s
join cliente c on s.cliente_codcliente = c.codcliente
join veiculo v on s.veiculo_cod_veiculo = v.cod_veiculo
where s.proxima_troca = ( select max(s.proxima_troca) 
from servicos 
where 
s.proxima_troca < current_date )       
;    
     
     
select s.veiculo_cod_veiculo, v.placa_veiculo,
 v.tipo_veiculo, v.modelo_veiculo, c.nome_cliente,
 c.sobrenome_cliente, s.filtro_combustivel, 
 s.proxima_troca, s.cod_servicos
from servicos s
left join cliente c on s.cliente_codcliente = c.codcliente
left join veiculo v on s.veiculo_cod_veiculo = v.cod_veiculo
where 
s.proxima_troca = ( select max(proxima_troca) 
from servicos where veiculo_cod_veiculo = s.veiculo_cod_veiculo 
);


SELECT
	veiculo_cod_veiculo, v.placa_veiculo,
    v.tipo_veiculo, v.modelo_veiculo,
    c.nome_cliente, c.sobrenome_cliente,
    s.filtro_combustivel, s.proxima_troca
FROM
	servicos s
    INNER JOIN cliente c
    ON s.cliente_codcliente = c.codcliente
    INNER JOIN veiculo v
    ON s.veiculo_cod_veiculo = v.cod_veiculo
WHERE
	proxima_troca < CURRENT_DATE;
    
    /*
    Funcionando qyery que retorna as data que faltam 30 dias para o vencimento
    com todos os campos
    */
    
    select 
veiculo_cod_veiculo, v.placa_veiculo,v.tipo_veiculo,v.modelo_veiculo,Count(placa_veiculo) as vencer,
c.nome_cliente,c.sobrenome_cliente,s.filtro_combustivel,s.filtro_cabine,s.filtro_ar,s.filtro_oleo,
max(proxima_troca) from servicos s  
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
	where 
	proxima_troca between now() - interval 30 day AND now() < current_date()
group by veiculo_cod_veiculo, nome_cliente, sobrenome_cliente having max(proxima_troca)
 < current_date() ;

   
   
  /*

Funcionando, query que conta o numero de veiculos vencidos, obs: é preciso 
remover a variavel: "ONLY-FULL-GROUP_BY" localizada em home-> mais-> variaveis-> sql-mode
no phpmtadmin...
*/         
   
    
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
                      p.pro < CURRENT_DATE;
/*

Funcionando, query que conta o numero de veiculos vencidos, obs: é preciso 
remover a variavel: "ONLY-FULL-GROUP_BY" localizada em home-> mais-> variaveis-> sql-mode
no phpmtadmin...
*/                      
                      

     SELECT
                   COUNT(*) AS total,   p.cod AS 'cod_veiculo', v.placa_veiculo AS 'placa',
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
                      p.pro < CURRENT_DATE;


select count(cod_servicos) AS TOTAL,
 v.tipo_veiculo, v.modelo_veiculo, c.nome_cliente,
 c.sobrenome_cliente, s.filtro_combustivel, 
 s.proxima_troca, s.cod_servicos
from servicos s
left join cliente c on s.cliente_codcliente = c.codcliente
left join veiculo v on s.veiculo_cod_veiculo = v.cod_veiculo
where 
s.proxima_troca = ( select max(proxima_troca) 
from servicos 
where 
proxima_troca between current_date() AND current_date() + interval 30 day

);



select 
veiculo_cod_veiculo, v.placa_veiculo,v.tipo_veiculo,v.modelo_veiculo,
c.nome_cliente,c.sobrenome_cliente,s.proxima_troca
 from servicos s  
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
	where 
	proxima_troca between current_date() AND current_date() + interval 30 day

  ;
