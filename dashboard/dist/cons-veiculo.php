<?php
session_start();
require '../../config.php';
if(empty($_SESSION['lg'])) {
    header("Location: ../../index.php");
    exit;
}
  

    if($_POST['pesquisar']){

        require 'cliente.class.php';
          $cliente = new Cliente();
         $lista = $cliente->pesquisar_veiculo();
        foreach ($lista as $item):
    


  ?>
  <?php endforeach; ?>



  <?php

}
?>

<?php

 if($_POST['pesquisar_placa']){

         require 'veiculo.class.php';
         $veiculo = new Veiculo();
         $lista = $veiculo->pesquisar();
            foreach ($lista as $item):
    


  ?>
  <?php endforeach; ?>

}

  <?php

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="img/oleo.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Consultar Veículo</title>  
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/js.js"></script>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">    
        <link href="css/styles.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
     
        <!--Script com a requisição Ajax para vincular o novo proprietario-->
         <script type="text/javascript" src="./js/ajax.js"></script>

          <!--javascript para mascara  CPF/CNPJ-->
         <script src="https://unpkg.com/imask"></script>



     <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>   

        <!--Link para icones-->
       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


               <!--multiplos submit-->
            <script type="text/javascript">
              function selecionaAction(script){
                  document.actionJava.action = script + '.php';
                  document.actionJava.submit();
              }

         </script>


       <style type="text/css">
        
         /*Aumenta o tamanho dos icones*/
            i.glyphicon.icones {
          font-size: 20px
          }

        .formulario{
             
            background-color: white;
            box-shadow: 4px 3px 0px 0px #808080;
            position: absolute;
            top: 100px;
            left: 60px;
           
    

          }


          .labelCpf {           
            position: relative;
            left: 10px;
            top: 1px;

          }

          .inputCpf {
            width: 320px;
            position: absolute;
            left: 25px;
            top: 35px;

          }

          
          .labelPlaca {
            top: 5px;
            position: absolute;
            left: 25px;

          }


          .bot {
            width: 140px;
            position: relative;            
            margin: 5px;
            padding:5px;
            top: -2px;

          }

          body{

               background-color: #FFFFE0;
          }
          .menu{
            color: #ffffff;
          }

           /*Responsividade para smartphone*/

          
           @media (max-width: 567px) {

                .inputCpf {

                width: 290px;
                position: relative;
                left: 10px;
                top: 10px;
              }

               .labelCpf {           
                position: relative;
                left: 15px;
                top: 10px;

              }

               .labelPlaca {

                top: -15px;
                position: absolute;
                left: 25px;

              }

              .bot {
              
                width: 100px;
                position: relative;
                margin: 5px;
                padding:5px;

                }

            .formulario {
             
            }

            .item2 {
               width: 100px;
               padding: 0px;
               margin: 10px;
            }
          

            @media (min-width: 567px) {



                  .formulario {
                  
                    width: 20px;
            }
             
              .item2 {
               width: 100px;
               padding: 0px;
               margin: 10px;
            }

           
          
            }
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
            <div class="menu"><?php require 'listar.php'  ?>;</div>

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
        </div>            <!--conteudo do meio -->


   <!--Início container--> 
   <div class="container formulario">


    <br />
    <br />
    <br />

                                           <h2 class="text-center">Consultar Veículos</h2><br />
                                           <hr />
                <!--Início da linha-->    
                 <div class="row">

                                <!--Início da coluna-->          
                                <div class="col-md-4">
                                                                       
                                        <form  id="form-cons-veiculo" method="POST" name="actionJava"> 
                                                 <label class="labelPlaca" for="">Placa Veículo</label>
                                                 <div class="input-group mb-3 inputCpf">
                                                  <input type="text" name="placa_veiculo" id="placa_veiculo" class="form-control" placeholder="Placa Veículo" value="<?php echo $item['placa_veiculo']; ?>" autocomplete="off" aria-label="Recipient's username"
                                                   aria-describedby="button-addon2" onblur="validar(getElementById('cpf_cnpj').value)"
                                                   data-toggle="tooltip"  title="Insira a placa do veículo para pesquisar"  value="<?php echo $item['cpf_cliente']; ?>">
                                                  <div class="input-group-append">
                                                    <button type="submit" class="btn btn-outline-secondary" id="button-addon2" name="pesquisar_placa" value="pesquisar">
                                                         <i class="fas fa-search"></i></button>
                                                  </div>
                                            </div> 


                         
                                    <!--Fim da coluna-->            
                                    </div>

                      
                           
                                  <!--Início da coluna-->          
                                  <div class="col-md-4">

                                        <div class="form-group">
                                                    <div class="   col">
                                                        <label for="">Tipo Veículo</label>
                                                            <select name="tipo_veiculo" id="tipo_veiculo" class="form-control">
                                                                 <?php foreach ($lista as $item) { ?>
                                                                 <option value="<?php echo $item['tipo_veiculo'] ?>"><?php echo $item['tipo_veiculo'] ?></option>
                                                                 <?php } ?>
                                                                 <option>Carro</option>
                                                                 <option>Moto</option>
                                                                 <option>Caminhão</option>
                                                              </select>             
                                                    </div>
                                                </div>

                                 <!--Fim da coluna-->          
                                   </div>

                      <!--Início da coluna-->         
                       <div class="col-md-4">
                                    <div class="form-group">
                                                <div class="   col">
                                                    <label for="">Fabricante Veículo</label>
                                                            <input type="text"  name="fabricante_veiculo" id="fabricante_veiculo" class="form-control" value="<?php echo $item['fabricante_veiculo'] ?>">
                                                          
                                                </div>
                                            </div>

                                 <!--Fim da coluna-->            
                             </div>

                                  
                                    <!--Fechamento da linha--> 
                                     </div>

                       <!--Início da linha-->     
                       <div class="row">

                                             <!--Início da coluna-->        
                                              <div class="col-md-4">

                                                     <div class="col">
                                                                    <label for="">Modelo do Veículo</label>
                                                                    <span class="campo-obrigatorio">*</span>                                                                        
                                                                            <input type="text" name="modelo_veiculo" id="modelo_veiculo" class="form-control" value="<?php echo $item['modelo_veiculo'] ?>">                                                                                                                                                   
                                                                
                                                         </div>


                                            <!--Fim da coluna-->            
                                             </div>

                                                    <!--Início da coluna-->    
                                                    <div class="col-md-4">

                                                          <div class="form-group">
                                                                <div class="   col">
                                                                    <label > Ano de Fabricação</label>
                                                                    <span class="campo-obrigatorio"></span>
                                                                    <input type="text" name="ano_fabricacao_veiculo" id="ano_fabricacao_veiculo" class="form-control" value="<?php echo $item['ano_fabricacao_veiculo'] ; ?>">    
                                                                </div>
                                                            </div>

                                        <!--Fim da coluna-->        
                                        </div>

                                                 <!--Início da coluna-->        
                                                  <div class="col-md-4">

                                                             <div class="col">
                                                                            <label>Cor do Veículo</label>
                                                                            <span class="campo-obrigatorio"></span>
                                                                           <input type="text" name="cor_veiculo" id="cor_veiculo" class="form-control" placeholder="Cor"  autocomplete="off" value= "<?php echo $item['cor_veiculo']; ?>" >    

                                                                        
                                                                 </div>


                                            <!--Fim da coluna-->             
                                        </div>

                                    </div>
                                    <!-- fim da linha-->


                                    <!--inicio da linha -->
                                    <div class="row">
                                        
                                                  
                                                      <!--Início da coluna-->        
                                                       <div class="col-sm-4">

                                                              <label for="proprietario" class="labelCpf">CPF</label>
                                                                <div class="input-group mb-3 inputCpf">
                                                               
                                                                          <input type="text" name="cpf_cliente" id="cpf_cnpj" class="form-control" placeholder="CPF"  data-toggle="tooltip" data-placement="top"
                                                                           title="Pesquisar Cliente por CPF"  autocomplete="off" aria-label="Recipient's username"
                                                                           aria-describedby="button-addon2" onblur="validar(getElementById('cpf_cnpj').value)" value="<?php echo $item['cpf_cliente']; ?>">
                                                                          <div class="input-group-append">
                                                                            <button type="submit" class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Vinclular novo proprietario" id="pesquisar" name="pesquisar" value="pesquisar">
                                                                                 <i class="fas fa-arrow-circle-right"></i></button>
                                                                         </div>
                                                            </div>                     

                                                      <!--Fim da coluna-->  
                                                    </div>
  

                                              <!--Início da coluna-->         
                                              <div class="col-md-4">
                                                             <div class="col">
                                                                            <label for="proprietario">Nome do Proprietário</label>
                                                                           <!--<input type="text" onClick="this.parentNode.remove();" name="nome_cliente" id="remove" class="form-control" placeholder="Nome Proprietário"  autocomplete="off" value= "<?php echo $item['nome_cliente']; ?>" >-->
                                                                           <input type="text" readonly name="nome_cliente" id="nome_cliente" class="form-control" value="<?php echo $item['nome_cliente']  ?>">
                                                                           <!--<input type="text" name="cliente_codcliente" id="cliente_codcliente" class="form-control" placeholder="Cod Proprietário"  autocomplete="off" value= "<?php echo $item['cliente_codcliente']; ?>" >-->
                                                                 </div>

                                                  <!--Fim da coluna-->  
                                                </div>


                                                <!--Início da coluna-->         
                                              <div class="col-md-4">
                                                             <div class="col">
                                                                            <label for="proprietario">Sobrenome do Proprietário</label>
                                                                           <!--<input type="text" onClick="this.parentNode.remove();" name="nome_cliente" id="remove" class="form-control" placeholder="Nome Proprietário"  autocomplete="off" value= "<?php echo $item['nome_cliente']; ?>" >-->
                                                                           <input type="text" readonly name="sobrenome_cliente" id="sobrenome_cliente" class="form-control" value="<?php echo $item['sobrenome_cliente']  ?>">
                                                                           <input type="hidden" name="cliente_codcliente" id="cliente_codcliente" class="form-control" placeholder="Cod Proprietário"  autocomplete="off" value= "<?php echo $item['cliente_codcliente']; ?>" >
                                                                 </div>

                                                           
                                                  <!--Fim da coluna-->  
                                                </div>
                
                     

                             <!--Fechamento da linha--> 
                              </div>
                    
             

                <div>
                    
                </div>
              <br />
              <br />
               <br /> 
                <!--Início da linha-->     
                <div class="row">
                                                   

                                <!--Início da coluna-->     
                                <div class="col-md-2 col-4">
                                               <button class="btn btn-success bot" type="submit" onclick="selecionaAction('update-veiculo');" >Salvar</button>
                                 <!--Fim da coluna-->       
                             </div>


                                 <!--Início da coluna-->    
                                  <div class="col-md-2 col-4">
                                                 <input class="btn btn-success bot" type="reset" name="password"  value="Limpar">


                                <!--Fim da coluna-->      
                                </div>                                

                <!--Fechamento da linha-->  
              </div>

               </form>

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


<!--Modal para CPF não Encontrado -->

 <div class="modal fade" id="cpf-alert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ATENÇÃO!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
            CPF Não Encontrado!
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

 <!--Modal pra Preencher o CPF-->

 <div class="modal fade" id="alert-preencher-cpf" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Campo Obrigatório!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
            Preencha o campo de CPF!
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

    
</html>
