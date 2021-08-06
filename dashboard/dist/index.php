<?php
session_start();
require '../../config.php';

if(empty($_SESSION['lg'])) {
    header("Location: ../../index.php");
    exit;
}


?>

    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <link rel="icon" type="image/png" href="img/oleo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastrto de Funcionários</title>
       
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">    
        <link href="css/styles.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

        
                <!--Link para icones-->

                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

                 <!--javascript para API IBGE Valida cep-->
        <script type="text/javascript" src="./js/validaCep.js"></script>
            <!--javascript para validar CPF/CNPJ-->
         <script type="text/javascript" src="./js/validaCpfCnpj.js"></script>
           <!--javascript para mascara  CPF/CNPJ-->
         <script src="https://unpkg.com/imask"></script>
          <!--javascript para mascara telefone-->
       <script type="text/javascript" src="./js/masTelefone.js"></script>


          <!--multiplos submit-->
              <script type="text/javascript">
                    function selecionaAction(script){
                        document.actionJava.action = script + '.php';
                        document.actionJava.submit();
                    }
           </script>


     <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>   

    <style type="text/css">
        
     body{
              padding: 20px;
              margin: 0px;
          }



          .marcador{
             
             color: #ffffff;
             font-size: 12px;
          }

          .marcador-container1{
             
            

              
          }


          .campo-obrigatorio{
            font-size: 20px;
            color: red;
          }



             @media (mim-width: 567px) {

                .grafico {
                width: 80px;
               
              } 

    </style>


    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #65AEEE">
            <a class="navbar-brand" href="#">
                <?php  require 'nome_sistema.php'; ?>
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
            <div class="marcador"><?php require 'listar.php';  ?></div>
    <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      
                       <!--icones -->
                        <a class="dropdown-item" href="#">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </svg>
                       &nbsp Trocar Usuário</a>

                        <a class="dropdown-item"   href="/tcc/segware-epi/sobre.php">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                        </svg>
                       &nbsp Sobre</a>

                        <a class="dropdown-item" href="#">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-octagon-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
                        </svg>
                        &nbsp Ajuda</a>

                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="sair.php">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
                              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z"/>
                              <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z"/>
                        </svg>
                    &nbsp Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" style="background-color: #65AEEE" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" d="M12 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                </svg>&nbsp&nbsp&nbsp CADASTROS 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="cad-cliente.php">Cadastro Clientes</a>
                                    <a class="nav-link" href="cad-veiculo.php">Cadastro Veiculos</a>
                                    <a class="nav-link" href="cad-troca.php">Troca de Óleo</a>
                                 
                                </nav>
                            </div>


                           
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                

                                <!--icone-->
                                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                </svg>&nbsp&nbsp&nbsp CONSULTAS  
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>



                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="cons-cliente.php">
                                        Clientes
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                     <a class="nav-link collapsed" href="cons-veiculo.php">
                                        Veiculos
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                  

                                </nav>
                           </div>

                          
                            
                    
                </nav>
        </div>
    


            <!--conteudo do meio -->

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>

                            <br />
                            <br />

                              <!--inicio da linha-->
                              <div class="row">

                               

                                <!--Início da coluna-->          
                                <div class="marcador col-md-4">
                                             <form action=""  method="POST" name="actionJava" > 


                                                                                <div class="input-group mb-3">
                                                                                  <input type="text" name="cpf_cliente" id="cpf_cnpj" class="form-control" placeholder="CPF"  data-toggle="tooltip" data-placement="top"
                                                                                   title="Pesquisar Cliente por CPF"  autocomplete="off" aria-label="Recipient's username"
                                                                                   aria-describedby="button-addon2" onblur="validar(getElementById('cpf_cnpj').value)" value="<?php echo $item['cpf_cliente']; ?>">
                                                                                  <div class="input-group-append">
                                                                                    <button type="submit" class="btn btn-outline-secondary" type="button" id="button-addon2"name="pesquisar" value="pesquisar"
                                                                                         onclick="selecionaAction('relat_cliente');" ><i class="fas fa-search"></i></button>
                                                                                  </div>
                                                                            </div>     


                                       
                                    <!--Fim da coluna-->            
                                    </div>


                                <!--Início da coluna-->          
                                <div class="marcador col-md-4">
                                   

                                              <div class="input-group mb-3">
                                                  <input type="text" name="placa_veiculo" id="cpf_cnpj" class="form-control" placeholder="Placa Veículo"  autocomplete="off" aria-label="Recipient's username"
                                                   aria-describedby="button-addon2" onblur="validar(getElementById('cpf_cnpj').value)"
                                                   data-toggle="tooltip"  title="Insira a placa do veículo para pesquisar"  value="<?php echo $item['cpf_cliente']; ?>">
                                                  <div class="input-group-append">
                                                    <button type="submit" class="btn btn-outline-secondary" id="button-addon2" name="pesquisar" value="pesquisar"
                                                         onclick="selecionaAction('relat_veiculo');" ><i class="fas fa-search"></i></button>
                                                  </div>
                                            </div> 


                                    <!--Fim da coluna-->            
                                    </div>

                                                                                   


                                            <!--Início da coluna-->          
                                <div class="marcador col-md-4">


                                       <div class="input-group mb-3">
                                                  <input type="text" name="troca-oleo" id="cpf_cnpj" class="form-control" placeholder="Placa Veículo"  autocomplete="off" aria-label="Recipient's username"
                                                   aria-describedby="button-addon2" onblur="validar(getElementById('cpf_cnpj').value)"
                                                    target="_blank" data-toggle="tooltip"  title="Histórico de Trocas de óleo"  value="<?php echo $item['cpf_cliente']; ?>">
                                                  <div class="input-group-append">
                                                    <button type="submit" class="btn btn-outline-secondary" id="button-addon2" name="pesquisar-troca" value="pesquisar"
                                                         onclick="selecionaAction('relat_troca');" ><i class="fas fa-search"></i></button>
                                                  </div>
                                            </div> 


                                      

                                    <!--Fim da coluna-->            
                                    </div>

                                           
                                        </form>
                                       </div> 
                                       <hr /> 
                                   

                        <div class="row">
                            
                             <div class="col-xl-4 col-md-4" >
                                <div class="" style="background-color: #3CB371";>

                                    <div class="card-body "style="color:black;background-color: #E6E6FA;  width:200px;height: 100px;font-size: 20px;" > Troca de Óleo realizadas</div>
                                    <div class="card-footer d-flex align-items-center "style="font-size: 40px;">
                                        <a class=""style="color:black; text-decoration:none;" href="trocas-realizadas.php">

                                          <?php 




                                              //Contar quantidade de serviços
                                              //require '../../config.php';
                                              $sql = "SELECT COUNT(*) as c FROM servicos ";
                                              $sql= $pdo->query($sql);
                                              $sql=$sql->fetch();
                                              $total= $sql['c'];
                                             
                                               echo $total;
                                              





                                          ?>

                                          </a>
                                       
                                        <div class="small text-white"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                               <div class="col-xl-4 col-md-4" >
                                <div class="" style="background-color: #FF8C00";>

                                    <div class="card-body "style="color:black;background-color: #E6E6FA;  width:200px;height: 100px;font-size: 20px;" > Troca de Óleo a Vencer</div>
                                    <div class="card-footer d-flex align-items-center "style="font-size: 40px;">
                                        <a class=""style="color:black; text-decoration:none;" href="trocas-avencer.php">

                                   <?php

                  
                                      //Contar quantidade de serviços
                                              //require '../../config.php';
                                              $sql = " 
                select 
                     COUNT(*) AS vencer, p.cod AS 'cod_veiculo', v.placa_veiculo AS 'placa',
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
                       p.pro BETWEEN CURRENT_DATE AND date_add(CURRENT_DATE , INTERVAL 30 day)

                                            ;


                                               ";
                                              $sql= $pdo->query($sql);
                                              $sql=$sql->fetch();
                                              $total= $sql['vencer'];
                                             
                                               echo $total;


                                             

                                   ?>
                                        </a>

                                          
                                        <div class="small text-white"><i class="fas fa-bell-slash"></i></div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-4 col-md-4" >
                                <div class="" style="background-color: #FF4500";>

                                    <div class="card-body "style="color:black;background-color: #E6E6FA;  width:200px;height: 100px;font-size: 20px;" > Troca de Óleo Vencidas</div>
                                    <div class="card-footer d-flex align-items-center "style="font-size: 40px;">
                                        <a class=""style="color:black; text-decoration:none;" href="trocas-vencidas.php">
                                    
                                     <?php

                                         //Contar quantidade de serviços
                                              //require '../../config.php';

                                        /*
                                              $sql = " select veiculo_cod_veiculo, v.placa_veiculo,
                                                v.tipo_veiculo,v.modelo_veiculo,c.nome_cliente,c.sobrenome_cliente, count(placa_veiculo) as vencidas,
                                                max(proxima_troca) from servicos s   INNER JOIN cliente c on s.cliente_codcliente = c.codcliente
                                                INNER JOIn veiculo v on s.veiculo_cod_veiculo = cod_veiculo
                                                 group by veiculo_cod_veiculo, nome_cliente, sobrenome_cliente having max(proxima_troca)
                                                 < current_date
                                               ";
                                        */
                                        


                                          $sql = " 

                                        select
                                       COUNT(*) AS vencidas,   p.cod AS 'cod_veiculo', v.placa_veiculo AS 'placa',
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

                                               ";
                                      
                                              $sql= $pdo->query($sql);
                                              $sql=$sql->fetch();
                                              $total= $sql['vencidas'];
                                             
                                               echo $total;
                                       
                                      ?>

                                        </a>

                                        <div class="small text-white"><i class="fas fa-exclamation-triangle"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                      
                       <hr />
                           
                        <div class="row grafico">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                       <?php  require 'grafico.php'  ?>
                                    </div>
                                </div>
                           </div>
                         </div>  
                       


        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>



    </body>
         <!--javascript para mascara  CPF/CNPJ-->
     <script type="text/javascript">
        var maskCpfOuCnpj = IMask(document.getElementById('cpf_cnpj'), {
    mask:[
        {
            mask: '000.000.000-00',
            maxLength: 11
        },
        {
            mask: '00.000.000/0000-00'
        }
    ]
});
</script>


</html>
