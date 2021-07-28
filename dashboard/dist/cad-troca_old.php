<?php
session_start();
require '../../config.php';
if(empty($_SESSION['lg'])) {
    header("Location: ../../index.php");
    exit; 
}   

                    require 'troca.class.php';

                    $troca = new Troca();

                   $lista = $troca->PesquisarCpfCliente();
                      foreach ($lista as $item):
                      
                ?>

                <?php endforeach;  ?>

               

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Troca de Óleo</title>


        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">    
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

        
                <!--Link para icones-->

                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



                 <!--javascript para validar CPF/CNPJ-->
         <script type="text/javascript" src="./js/validaCpfCnpj.js"></script>
          <!--javascript para mascara  CPF/CNPJ-->
         <script src="https://unpkg.com/imask"></script>
          <!--javascript para add campo de input-->
         <script type="text/javascript" src="./js/addCampoInput.js"></script>

         <!--Inputs Dinamicos-->
        <script type="text/javascript" src="./js/add-campo-imput.js"></script>
                <!--arquivo jquery-->
        <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>

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
        
          /*Aumenta o tamanho dos icones*/
            i.glyphicon.icones {
          font-size: 20px;
          }


         .formulario{
             
           background-color: white;
            box-shadow: 4px 3px 0px 0px #808080;
            position: absolute;
            top: 100px;
            left: 60px;
           

          }

          .pesq{
            position: relative;
            top: 22 px;
            left: 10 px;
          }
          body{

               background-color: ;
          }
          .menu{
            color: #ffffff;
          }

           /*Responsividade para smartphone*/
          
           @media (max-width: 566px) {

            .formulario {
              
            }

            .item2 {
               width: 100px;
               padding: 0px;
               margin: 0px;
            }
           

            @media (min-width: 567px) {

                  .formulario {
                            
            }

            .item2 {
               width: 100px;
               padding: 0px;
               margin: 0px;
            }
          

        
          }

      </style>

      <script type="text/javascript">

        $(function(){
            $('a[href="dados_veiculo"]').tab('show');
        });

      </script>




      </head>
<body class="sb-nav-fixed">

      

        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #65AEEE">
            <a class="navbar-brand" href="#">Add Troca de Óleo</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>

             <div class="menu"><?php require 'listar.php';  ?></div>

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

         <!--Início container-->
           
   <div class="container formulario">


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-dados_cliente" data-toggle="tab" href="#dados_cliente" role="tab" aria-controls="dados_cliente" aria-selected="true">Dados do Cliente</a>
    <a class="nav-item nav-link" id="nav-dados_veiculo" data-toggle="tab" href="#dados_veiculo" role="tab" aria-controls="dados_veiculo" aria-selected="false">Dados Do Veículo</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#dados_troca" role="tab" aria-controls="dados_troca" aria-selected="false">Dados da Troca</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="dados_cliente" role="tabpanel" aria-labelledby="dados_cliente">
     <h2 class="text-center">Dados do Cliente</h2><br />

       <hr />

     <!--Início da linha--> 
     <div class="row">

                <div class="col-md-3 pesq">

                                  <form action=""  method="POST" name="actionJava"  > 

                               <div class="input-group mb-3">
                                  <input type="text" name="cpf_cliente" id="cpf_cnpj" class="form-control" placeholder="CPF"  autocomplete="off" aria-label="Recipient's username"
                                   aria-describedby="button-addon2" onblur="validar(getElementById('cpf_cnpj').value)" value="<?php echo $item['cpf_cliente']; ?>">
                                  <div class="input-group-append">
                                    <button type="submit" class="btn btn-outline-secondary" type="button" id="button-addon2" name="pesquisar"  value="pesquisar" ><i class="fas fa-search"></i></button>
                                  </div>
                            </div>          
                            
                </div>            
                <!--Fechamento da coluna -->

              <!-- Fechamento da coluna -->
          </div>

          <div class="row">

          <!--Início da coluna--> 
                           <div class="marcado1r col-md-12">
                                                          
                                <div class="form-group">
                                    <div class="   col">
                                        <label > Nome</label>
                                        <input type="text" disabled="" name="nome_cliente" id="nome_cliente" class="form-control" value="<?php echo $item['nome_cliente']; ?>"  placeholder="Sobreome" autocomplete="off" >    

                                    </div>
                                </div>
                              <!--Fim da coluna--> 
                            </div>
                                    

                    </div>
                  <!--Fechamento da linha-->

                            
                  <!--Início da linha-->  
                  <div class="row">

                          <!--Início da coluna--> 
                           <div class="marcado1r col-md-5">
                                                          
                                <div class="form-group">
                                    <div class="   col">
                                        <label > Sobrenome do Cliente</label>
                                        <input type="text" disabled="" name="sobrenome_cliente" id="sobrenome_cliente" class="form-control" value="<?php echo $item['sobrenome_cliente']; ?>"  placeholder="Sobreome" autocomplete="off" >    

                                    </div>
                                </div>
                              <!--Fim da coluna--> 
                            </div>
                                                          
                             <!--Início da coluna-->          
                           <div class="marcador1 col-md-4">
                        
                              <div class="form-group">
                                    <div class="   col">
                                        <label > Telefone1</label>
                                        <input type="text" disabled="" name="telefone1_cliente" id="telefone1_cliente" class="form-control" placeholder="Telefone" value="<?php echo $item['telefone1_cliente']; ?>" autocomplete="off"  >    
                                    </div>
                                </div>

                          <!--Fim da coluna-->                                       
                          </div>

                                  <!--Início da coluna-->        
                                         <div class="marcador1 col-md-3">             
                                                <div class="form-group">
                                                      <div class="   col">
                                                          <label > Telefone2</label>
                                                          <input type="text" disabled="" name="telefone2_cliente" id="telefone2_cliente" class="form-control" placeholder="Telefone" value="<?php echo $item['telefone2_cliente']; ?>"  autocomplete="off">    
                                                      </div>
                                               </div>

                                            <!--Fim da coluna-->             
                                          </div>


                     <!--Fechamento da linha-->  </div>



                      <!--Início da linha-->      <div class="row">
                                                   

                                        <!--Início da coluna-->   
                                        <div class="marcador1 col-md-5">

                                               <div class="form-group">
                                                      <div class="   col">
                                                          <label > RG</label>
                                                          <input type="text" disabled="" name="rg_cliente" id="rg_cliente" class="form-control " placeholder="RG" value="<?php echo $item['rg_cliente']; ?>" autocomplete="off" >    
                                                      </div>
                                                  </div>

                                         <!--Fim da coluna-->       
                                       </div>

                                         <!--Início da coluna-->  
                                           <div class="marcador1 col-md-4">

                                                <div class="form-group">
                                                    <div class="   col">
                                                        <label > Data de Nascimento</label>
                                                        <input type="date" disabled="" name="data_nascimento_cliente" id="data_nascimento_cliente" class="form-control" value="<?php echo $item['data_nascimento_cliente']; ?>" placeholder="Nascimento"  autocomplete="off" >    
                                                    </div>
                                                </div>

                                          <!--Fim da coluna-->       
                                           </div>


                                         <!--Início da coluna-->  
                                           <div class="marcador1 col-md-3">

                                                <div class="form-group">
                                                    <div class="   col">
                                                        <label > Sexo</label>
                                                        <input type="text" disabled="" name="data_nascimento_cliente" value="<?php echo $item['sexo_cliente']; ?>"  id="data_nascimento_cliente" class="form-control" placeholder="Sexo"  autocomplete="off"  >    
                                                    </div>
                                                </div>

                                          <!--Fim da coluna-->       
                                           </div>
                                                                            

                        <!--Fechamento da linha-->  
                        </div>



                       <!--Início da linha-->     
                        <div class="row">
                                                   

                                        <!--Início da coluna-->    
                                         <div class="marcador1 col-md-5">

                                                <div class="form-group">
                                                      <div class="   col">
                                                          <label for="cidade">Cidade</label>
                                                             <input type="text" disabled="" name="cidade" id="cidade" class="form-control" placeholder="Cidade"   value="<?php echo $item['cidade_cliente']; ?>" autocomplete="off">    
    
                                                      </div>
                                                 </div>

                                         <!--Fim da coluna-->      
                                          </div>

                                         <!--Início da coluna-->   
                                          <div class="marcador1 col-md-4">

                                                  <div class="form-group">
                                                        <div class="   col">
                                                            <label for="cidade">UF</label>
                                                             <input type="text" disabled="" name="uf" id="uf" class="form-control" placeholder="UF"  value="<?php echo $item['uf_cliente']; ?>" autocomplete="off" >    
   
                                                          </div>
                                                  </div>

                                          <!--Fim da coluna-->        
                                          </div>


                                          <!--Início da coluna-->   
                                           <div class="marcador1 col-md-3">
                                                     <div class="form-group">
                                                            <div class="   col">
                                                                <label > Bairro</label>
                                                                <span class="campo-obrigatorio"></span>
                                                                <input type="text" disabled="" name="bairro_cliente" id="bairro_cliente" class="form-control " value="<?php echo $item['bairro_cliente']; ?>" autocomplete="off" placeholder="bairro">
                                                            </div>
                                                       </div>

                                            
                                         <!--Fim da coluna-->       
                                         </div>
                                                                            

                        <!--Fechamento da linha-->  
                        </div>




                         <!--Início da linha-->     
                          <div class="row">
                                                   

                                         <!--Início da coluna-->   
                                          <div class="marcador1 col-md-5">

                                                <div class="form-group">
                                                      <div class="   col">
                                                          <label > Número da Rua</label>
                                                          <input type="number" disabled="" name="numero_rua_cliente" id="numero_rua_cliente" class="form-control " autocomplete="off" value="<?php echo $item['numero_rua_cliente']; ?>" placeholder="Número da Rua" >    

                                                      </div>
                                                  </div>

                                        <!--Fim da coluna-->       
                                         </div>

                                           <!--Início da coluna-->   
                                          <div class="marcador1 col-md-4">

                                                <div class="form-group">
                                                      <div class="   col">
                                                          <label > Nome da Rua</label>
                                                          <input type="text" disabled="" name="rua_cliente" id="rua_cliente" class="form-control " value="<?php echo $item['rua_cliente']; ?>" autocomplete="off" value="<?php echo $item['numero_rua_cliente']; ?>" placeholder="Nome da Rua" >    

                                                      </div>
                                                  </div>

                                        <!--Fim da coluna-->       
                                         </div>

                                         <!--Início da coluna-->   
                                          <div class="marcador1 col-md-3">

                                                <div class="form-group">
                                                      <div class="   col">
                                                          <label > Cod Cliente</label>
                                                          <input type="text"  name="cliente_codcliente" id="codcliente" class="form-control " value="<?php echo $item['codcliente']; ?>" autocomplete="off" value="<?php echo $item['numero_rua_cliente']; ?>" placeholder="Nome da Rua" >    

                                                      </div>
                                                  </div>

                                        <!--Fim da coluna-->       
                                         </div>

                                        <!--Fechamento da linha-->  
                                        </div>


                                        <div class="row">
                                        <!-- INicio da linha -->
                                            
                                <!--Início da coluna-->    
                                 <div class="bot1 col-md-2">

                                                <div class="form-group">
                                                      <div class="   col">
                                        <button class="btn btn-success btn-block" type="submit"  >Proximo...</button>
                                                        </div>
                                                  </div>                                              
                                       
                                 <!--Fim da coluna-->       
                                </div>
    
                                    <!--Fim da linha -->
                                </div>

                                        <br />
                                        <br />
                                        

</div>
  <div class="tab-pane fade" id="dados_veiculo" role="tabpanel" aria-labelledby="dados_veiculo">
        
                                           <h2 class="text-center">Dados do Veículo</h2><br />
                                           <hr />

                                            <div class="table-responsive-sm">
                                              <table class="table">
                                                  <thead class="thead-light">
                                                    <tr>
                                                      
                                                      <th  scope="col">PLaca do Veículo</th>
                                                      <th  scope="col">Tipo do Veículo</th>
                                                      <th  scope="col">Fabricante do Veículo</th>
                                                      <th  scope="col">Modelo do Veículo</th> 
                                                      <th colspan="2"  scope="col">Ações</th>                                              
                                                      
                                                      
                                                    </tr>
                                                  </thead>
                                                    <tbody>
                                                      <?php foreach ($lista as $item){
                                                    ?>
                                                        <tr>
                                                          <td name="placa_veiculo"> <?php echo $item['placa_veiculo'] ?></td>
                                                          <td name="tipo_veiculo"> <?php echo $item['tipo_veiculo']?> </td>
                                                          <td name="fabricante_veiculo"> <?php echo $item['fabricante_veiculo'] ?> </td>
                                                          <td name="modelo_veiculo">  <?php echo $item['modelo_veiculo'] ?></td>
                                                          <td >
                                                            <input type="hidden" name="veiculo_cod_veiculo" value=" <?php echo $item['cod_veiculo']; ?>" >
                                                            <input type="hidden" name="placa_veiculo" value=" <?php echo $item['placa_veiculo']; ?>" >
                                                          </td>

                                                           <!--<input type="text" name="veiculo_cod_veiculo" value="<?php //echo $item['cod_veiculo']; ?>">-->

                                                          <td onClick="this.parentNode.remove();">
                                                           <i class="fas fa-trash-alt"  <?php echo $item['placa_veiculo'];?> id="remove" style="color:red;"> </i>

                                                          </td>
                                                        </tr>
                                                     <?php

                                                    }
                                                ?>          
                                                  
                                                    
                                                    </tbody>
                                            </table> 
                                        </div>
                                        <br />
        
</div>
  <div class="tab-pane fade" id="dados_troca" role="tabpanel" aria-labelledby="dados_troca">
        
                        <h2 class="text-center">Dados Da Troca</h2><br />
                                           <hr />

                       <!--Início da linha-->    
                  <div class="row">
                                                   

                                        <!--Início da coluna-->  
                                        <div class="marcador1 col-md-4">

                                                 <div class="form-group">
                                                             <div class="form-group">
                                                                  <div class="col">
                                                                      <label>Filtro de Cabine</label>
                                                                        <span class="campo-obrigatorio"></span>
                                                                        <div class="input-group">
                                                                              <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                  <input type="radio" name="status_filtro_cabine" data-toggle="tooltip" data-placement="top" title="Se trocou o filtro,favor marcar a opção ao lado" value="sim" aria-label="Botão radio para acompanhar input text">

                                                                                </div>
                                                                              </div>
                                                                              <input type="text" class="form-control" name="filtro_cabine" id="filtro_combustivel" data-toggle="tooltip" data-placement="top" title="Se trocou o filtro,favor marcar a opção ao lado" aria-label="Input text com botão radio">

                                                                            </div>

                                                                  
                                                                 </div>
                                                              </div>
                                                    </div>
                                                                    

                                         <!--Fim da coluna-->      
                                          </div>

                                         <!--Início da coluna-->  
                                          <div class="marcador1 col-md-4">
                                         
                                              <div class="form-group">
                                                             <div class="form-group">
                                                                  <div class="col">
                                                                      <label>Filtro de Combustível</label>
                                                                        <span class="campo-obrigatorio"></span>
                                                                        <div class="input-group">
                                                                              <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                  <input type="radio" name="status_filtro_combustivel" data-toggle="tooltip" data-placement="top" title="Se trocou o filtro,favor marcar a opção ao lado" value="sim" aria-label="Botão radio para acompanhar input text">

                                                                                </div>
                                                                              </div>
                                                                              <input type="text" class="form-control" name="filtro_combustivel" data-toggle="tooltip" data-placement="top" title="Se trocou o filtro,favor marcar a opção ao lado" id="filtro_combustivel" aria-label="Input text com botão radio">

                                                                            </div>

                                                                  
                                                                 </div>
                                                              </div>
                                                    </div>
                                                  


                                        <!--Fim da coluna-->       
                                         </div>


                                          <!--Início da coluna-->   
                                           <div class="marcador1 col-md-4">

                                                 <div class="form-group">
                                                             <div class="form-group">
                                                                  <div class="col">
                                                                      <label>Filtro de Ar</label>
                                                                        <span class="campo-obrigatorio"></span>
                                                                        <div class="input-group">
                                                                              <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                  <input type="radio" name="status_filtro_ar" data-toggle="tooltip" data-placement="top" title="Se trocou o filtro,favor marcar a opção ao lado" value="sim" aria-label="Botão radio para acompanhar input text">

                                                                                </div>
                                                                              </div>
                                                                              <input type="text" class="form-control" name="filtro_ar" id="filtro_ar"  data-toggle="tooltip" data-placement="top" title="Se trocou o filtro,favor marcar a opção ao lado" aria-label="Input text com botão radio">

                                                                            </div>

                                                                  
                                                                 </div>
                                                              </div>
                                                    </div>
                                                  
                                                  
                                              <!--Fim da coluna-->        
                                            </div>
                                                                           

                    <!--Fechamento da linha--> 
                    </div>



                     <!--Início da linha-->    
                     <div class="row">
                                                   

                                        <!--Início da coluna-->    
                                         <div class="marcador1 col-md-4">

                                                            <div class="form-group">
                                                             <div class="form-group">
                                                                  <div class="col">
                                                                      <label>Filtro de Óleo</label>
                                                                        <span class="campo-obrigatorio"></span>
                                                                        <div class="input-group">
                                                                              <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                  <input type="radio" name="status_filtro_oleo" data-toggle="tooltip" data-placement="top" title="Se trocou o filtro,favor marcar a opção ao lado" value="sim" aria-label="Botão radio para acompanhar input text">

                                                                                </div>
                                                                              </div>
                                                                              <input type="text" class="form-control" name="filtro_oleo" id="filtro_oleo" data-toggle="tooltip" data-placement="top" title="Se trocou o filtro,favor marcar a opção ao lado" aria-label="Input text com botão radio">

                                                                            </div>

                                                                  
                                                                 </div>
                                                              </div>
                                                    </div>
                                                   

                                         <!--Fim da coluna-->       
                                        </div>

                                                <!--Início da coluna-->    
                                         <div class="marcador1 col-md-4">

                                                           <div class="form-group"> 
                                                                <div class="col">
                                                                        <label>Tipo de óleo</label>
                                                                        <span class="campo-obrigatorio"></span>
                                                                        <input type="text" name="tipo_oleo" id="tipo_oleo" class="form-control">
                                                                        
                                                                  </div>          
                                                                   
                                                            </div>

                                         <!--Fim da coluna-->       
                                        </div>


                                       <!--Início da coluna-->    
                                         <div class="marcador1 col-md-4">

                                                           <div class="form-group">
                                                                    <div class="col">
                                                                        <label>Quantidade de óleo</label>
                                                                        <span class="campo-obrigatorio"></span>
                                                                        <input type="number" name="qtd_oleo" class="form-control">
                                                                    </div>

                                                             </div>

                            
                                         <!--Fim da coluna-->       
                                        </div> 


                                                                            

                      <!--Fechamento da linha--> 
                       </div>
                       <hr />

                       <!--Início da linha-->     
                       <div class="row">


                                        <!--Início da coluna-->    
                                         <div class="marcador1 col-md-4">

                                                           <div class="form-group">
                                                                    <div class="col">
                                                                        <label>KM Atual</label>
                                                                        <span class="campo-obrigatorio"></span>
                                                                        <input type="number" name="km" id="km" class="form-control">
                                                                    </div>
                                                                
                                                          </div>

                                         <!--Fim da coluna-->       
                                        </div>

                                        <!--Início da coluna-->   
                                          <div class="marcador1 col-md-4">
                                                        <div class="form-group">
                                                                    <div class="col">
                                                                        <label > Data da Troca</label>
                                                                        <span class="campo-obrigatorio">*</span>
                                                                        <input type="date" name="data_troca" id="data_troca" class="form-control"  >    

                                                                    </div>
                                                         </div>

                                        <!--Fim da coluna-->       
                                         </div>


                                           <!--Início da coluna-->   
                                           <div class="marcador1 col-md-4">
                                                       <div class="form-group">
                                                              <div class="col">
                                                                  <label> Próxima troca De óleo</label>
                                                                    <span class="campo-obrigatorio">*</span><br/>
                                                                    <!--
                                                                  <label> 1 Ano</label>
                                                                  <input class="form-comtrol" type="radio"  name="proxima_troca" id="proxima_troca" value="12"> 
                                                                   <label >6 Meses</label> 
                                                                  <input class="form-comtrol" type="radio" name="proxima_troca" id="proxima_troca" value="6" >    
                                                                -->
                                                                <input type="date" name="proxima_troca" class="form-control">
                                                              </div>
                                                        </div>

                                            
                                        <!--Fim da coluna-->      
                                        </div>
                                 

                                        <!--Fechamento da linha-->
                                      </div>

                       <!--Início da linha-->     
                       <div class="row">

                                  <!--Início da coluna-->   
                                  <div class="marcador1 col-md-12">

                                          <div class="form-group">
                                                
                                                      <div class="   col">
                                                          <label > Observação</label>
                                                          <textarea id="obs_troca" name = "obs_troca" class="md-textarea form-control" rows="3" data-toggle="tooltip" data-placement="top" title="OBS sobre o veículo"></textarea>
                                                          <input type="hidden" name="Atual">
                                                      </div>
                                                
                                           </div>


                                                        
                                  <!--Fim da coluna-->      
                                  </div>

                                 

                      <!--Fechamento da linha--> 
                       </div>
                    

                   

                      <br />

                        <!--Início da linha-->     
                        <div class="row">
                                                   

                                <!--Início da coluna-->    
                                 <div class="bot1 col-md-2">
                                        <div class="form-group">
                                            <div class="col">
                                        <button class="btn btn-success btn-block" type="submit" onclick="selecionaAction('insert-cad-troca');"  >Salvar</button>
                                            </div>
                                        </div>
                                 <!--Fim da coluna-->       
                                </div>


                                 <!--Início da coluna-->     
                                 <div class="bot1 col-md-2">
                                       <input class="btn btn-success container btn-block" type="reset" name="password"  value="Limpar">
                                <!--Fim da coluna-->   
                                </form>   
                                </div>                                

                <!--Fechamento da linha-->  
                </div>

                <br />
     
  </div>
</div>


   <!--Fechamento container--> 
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
