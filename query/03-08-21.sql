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
                       
                       
                       

                