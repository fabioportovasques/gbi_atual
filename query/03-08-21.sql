   SELECT
                      p.cod AS 'cod_veiculo', v.placa_veiculo AS 'placa',
                        v.tipo_veiculo AS 'tipo', v.modelo_veiculo AS 'modelo',
                        c.nome_cliente AS 'nome', c.sobrenome_cliente AS 'sobrenome',
                        c.telefone1_cliente AS 'telefone1',
                        p.fil AS 'filtro_combustivel',status_filtro_cabine, p.pro AS 'proxima_troca'
                    FROM
                      (SELECT
                          veiculo_cod_veiculo AS cod, filtro_combustivel AS fil,status_filtro_cabine,
                          cliente_codcliente AS cli, max(proxima_troca) AS pro
                         FROM
                          servicos GROUP BY veiculo_cod_veiculo) p
                        INNER JOIN cliente c
                        ON p.cli = c.codcliente
                        INNER JOIN veiculo v
                        ON p.cod = v.cod_veiculo
                    WHERE
                      p.pro < CURRENT_DATE;
                      
                      
                      
                      
                      select * from servicos where cod_servicos = "82";
                      
                      
                      
                      select
                      p.cod AS 'cod_veiculo', cod_servicos,codcliente, v.placa_veiculo AS 'placa',
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
                        ON p.cod = v.cod_veiculo;




    /*
                        Funcionando, retorna as datas vencidas que 
                        são menores que hoje e que não possuem data de troca superior
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
                        
                        /*memor que 90 dias */
                        
					SELECT 
                       date_sub(proxima_troca, INTERVAL  10 day) FROM servicos;
                       
                       
                         select proxima_troca from servicos
                where   date_add(current_date, interval 10 day) ;
                
                
                
                
select 
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
                       p.pro BETWEEN CURRENT_DATE AND date_add(CURRENT_DATE , INTERVAL 190 day);
                       
                       
             /*trocas no mes atual */          
                       
select count(*) as total, data_troca from servicos 
where month(data_troca) = 
month(current_date())
AND year(data_troca) = year(current_date());    


select 
c.nome_cliente,c.sobrenome_cliente,cod_veiculo, v.placa_veiculo,v.modelo_veiculo,
s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
s.filtro_oleo,data_troca,max(proxima_troca),
s.tipo_oleo,s.status_filtro_combustivel,
s.status_filtro_cabine,s.status_filtro_ar,
s.status_filtro_oleo,s.km,s.qtd_oleo
FROM servicos s
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo  ;

select * from veiculo where placa_veiculo ='neo6317';  


/***********************************************************/
              

                select 
                      p.cod AS 'cod_veiculo',status_filtro_cabine,data_troca, v.placa_veiculo AS 'placa',
                        v.tipo_veiculo AS 'tipo', v.modelo_veiculo AS 'modelo',
                        c.nome_cliente AS 'nome', c.sobrenome_cliente AS 'sobrenome',
                        c.telefone1_cliente AS 'telefone1',
                        p.fil AS 'filtro_combustivel', p.pro AS 'proxima_troca'
                    FROM
                      (SELECT
                          veiculo_cod_veiculo AS cod,status_filtro_cabine,data_troca, filtro_combustivel AS fil,
                          cliente_codcliente AS cli, max(proxima_troca) AS pro
                         FROM
                          servicos GROUP BY veiculo_cod_veiculo) p
                        INNER JOIN cliente c
                        ON p.cli = c.codcliente
                        INNER JOIN veiculo v
                        ON p.cod = v.cod_veiculo
                    WHERE
                      
                        
                       placa_veiculo = 	"myi1864";
                       
 select 
c.nome_cliente,c.sobrenome_cliente, v.placa_veiculo,v.modelo_veiculo,
s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,cod_servicos,
s.filtro_oleo,data_troca,proxima_troca,
s.tipo_oleo,s.status_filtro_combustivel,
s.status_filtro_cabine,s.status_filtro_ar,
s.status_filtro_oleo,s.km,s.qtd_oleo,proxima_troca
FROM servicos s
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
            
where placa_veiculo= "myi1864";

 SELECT
  p.cod AS 'cod_veiculo', v.placa_veiculo AS 'placa',
	v.tipo_veiculo AS 'tipo', v.modelo_veiculo AS 'modelo',
	c.nome_cliente AS 'nome', c.sobrenome_cliente AS 'sobrenome',
	c.telefone1_cliente AS 'telefone1',
	p.fil AS 'filtro_combustivel', max(p.pro) AS 'proxima_troca',data_troca,obs_troca,
    km
FROM
  (SELECT
	  veiculo_cod_veiculo AS cod, filtro_combustivel AS fil,
	  cliente_codcliente AS cli, data_troca, proxima_troca AS pro,obs_troca,km
	 FROM
	  servicos GROUP BY veiculo_cod_veiculo) p
	INNER JOIN cliente c
	ON p.cli = c.codcliente
	INNER JOIN veiculo v
	ON p.cod = v.cod_veiculo
    where placa_veiculo = "myi1864";
    
    
		 select
                      p.cod AS 'cod_veiculo', codcliente, cod_servicos,v.placa_veiculo AS 'placa',
                        v.tipo_veiculo AS 'tipo', v.modelo_veiculo AS 'modelo',
                        c.nome_cliente AS 'nome', c.sobrenome_cliente AS 'sobrenome',
                        c.telefone1_cliente AS 'telefone1',
                        p.fil AS 'filtro_combustivel',filtro_cabine,status_filtro_cabine, filtro_ar,
                        filtro_oleo,tipo_oleo,status_filtro_combustivel,status_filtro_ar,
                        status_filtro_oleo,
                        qtd_oleo, p.obs_troca AS 'obs',km,data_troca,p.pro AS 'proxima_troca'
                    FROM
                      (SELECT
                          veiculo_cod_veiculo AS cod,cod_servicos, filtro_combustivel AS fil,filtro_cabine,
                          filtro_ar,filtro_oleo,tipo_oleo,status_filtro_cabine,status_filtro_combustivel,
							status_filtro_oleo,status_filtro_ar,qtd_oleo,obs,km,data_troca,
                          cliente_codcliente AS cli, max(proxima_troca) AS pro
                         FROM
                          servicos GROUP BY veiculo_cod_veiculo) p
                        INNER JOIN cliente c
                        ON p.cli = c.codcliente
                        INNER JOIN veiculo v
                        ON p.cod = v.cod_veiculo
                                       

		 WHERE cod_veiculo = '3';
    
    /***cliente antigo****/
    
  select 
c.nome_cliente,c.sobrenome_cliente,cod_veiculo, v.placa_veiculo,v.modelo_veiculo,
s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
s.filtro_oleo,data_troca,proxima_troca,
s.tipo_oleo,s.status_filtro_combustivel,
s.status_filtro_cabine,s.status_filtro_ar,
s.status_filtro_oleo,s.km,s.qtd_oleo,cod_servicos,codcliente
FROM servicos s
INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
where placa_veiculo= "myi1864" order by proxima_troca desc;
                  
/***cliente atual testando****/                  
                  
                  
 select 
				c.nome_cliente,c.sobrenome_cliente,cod_veiculo, v.placa_veiculo,v.modelo_veiculo,
				s.filtro_combustivel,s.filtro_cabine,s.obs_troca,s.filtro_ar,
				s.filtro_oleo,data_troca,proxima_troca,
				s.tipo_oleo,s.status_filtro_combustivel,
				s.status_filtro_cabine,s.status_filtro_ar,
				s.status_filtro_oleo,s.km,s.qtd_oleo,s.cod_servicos,codcliente
				FROM servicos s
				INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
				INNER JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente 
                where placa_veiculo = "myi1864" ;
                        

 select  c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, v.tipo_veiculo, v.fabricante_veiculo,
 cod_veiculo,v.modelo_veiculo,v.placa_veiculo FROM cliente AS c
JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente 
WHERE v.placa_veiculo = "myi1864";
                       

                