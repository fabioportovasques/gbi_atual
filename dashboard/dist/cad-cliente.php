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
        <meta charset="utf-8" />
         <link rel="icon" type="image/png" href="img/oleo.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastrto de Clientes</title>
       
        <link href="css/styles.css" rel="stylesheet"/>
       
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <!--javascript para API IBGE Valida cep-->
         <script type="text/javascript" src="./js/validaCep.js"></script>
           <!--javascript para validar CPF/CNPJ-->
         <script type="text/javascript" src="./js/validaCpfCnpj.js"></script>
         <!--javascript para mascara  CPF/CNPJ-->
         <script src="https://unpkg.com/imask"></script>
     

     <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>   

   

      <style type="text/css">
        

          .formulario{
             
            
             background-color: white;
             box-shadow: 4px 3px 0px 0px #808080;
            position: absolute;
            top: 70px;
            left: 50px;
           
           
          }

          .bot {
            width: 140px;
            position: absolute;
            left: 20px;
            margin: 5px;
            padding:5px;

          }

          body{

               background-color: #FFFFE0;
          }
          .menu{
            color: #ffffff;
          }

           /*Responsividade para smartphone*/

          @media (max-width: 567px) {

            .bot {
              
            width: 100px;
            position: absolute;
            left: 20px;
            margin: 5px;
            padding:5px;

            }
          }



      </style>

    </head>
<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #65AEEE">
            <a class="navbar-brand" href="index.html">
                <?php  require 'nome_sistema.php'; ?>
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
             <div class="menu"> <?php require 'listar.php';  ?></div>

    <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      
                       <!--icones -->
                        <a class="dropdown-item" href="sair.php">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </svg>
                       &nbsp Trocar Usuário</a>

                        <a class="dropdown-item"   href="#">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                        </svg>
                       &nbsp Sobre</a>

                     

                        
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

           
   <!--Início container--> <div class="container formulario">

                                            <br />
                                            <br />
                                            <br />
                                            <br />
                                            

                                           <h2 class="text-center">Cadastro De Cliente</h2><br />
                                           <hr />
                <!--Início da linha-->     <div class="row">

                                <!--Início da coluna-->          <div class="marcador1 col-md-4">
                                                                       
                                                                            <form action="insert_cliente.php"  method="POST"> 

                                                                                <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Nome do Cliente</label>
                                                                                       <span class="campo-obrigatorio">*</span>
                                                                                        <input type="text" name="nome_cliente" id="nome_cliente" class="form-control" autocomplete="off"  placeholder="Nome Cliente" required="" >    
                                                                                    </div>
                                                                                </div>

                                 <!--Fim da coluna-->            </div>

                                  <!--Início da coluna-->          <div class="marcador1 col-md-8">
                                                                       
                                                                            

                                                                                <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Sobrenome do Cliente</label>
                                                                                       <span class="campo-obrigatorio">*</span>
                                                                                        <input type="text" name="sobrenome_cliente" id="sobrenome_cliente" class="form-control"  autocomplete="off" placeholder="Sobreome Cliente" required="" >    
                                                                                    </div>
                                                                                </div>

                                 <!--Fim da coluna-->            </div>

                                  <!--Fechamento da linha-->  </div>

                                   <!--Início da linha-->     <div class="row">

                                 <!--Início da coluna-->         <div class="marcado1r col-md-4">
                                                                        
                                                                                <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > CPF/CNPJ</label>
                                                                                          <span class="campo-obrigatorio">*</span>
                                                                                        <input type="text" name="cpf_cliente" id="cpf_cnpj" class="form-control" target="_blank" data-toggle="tooltip"  title="Insira um CPF/CNPJ Válido no formato(00000000000000) sem espaço ou pontos" placeholder="CPF" onblur="validar(getElementById('cpf_cnpj').value)"  autocomplete="off"  required="" >    

                                                                                    </div>
                                                                                </div>


                                <!--Fim da coluna-->             </div>
                                                                    

                                <!--Início da coluna-->          <div class="marcador1 col-md-4">
                                                                        

                                                                              <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Telefone1</label>
                                                                                        <span class="campo-obrigatorio">*</span>
                                                                                        <input type="number" name="telefone1_cliente" id="telefone1_cliente" class="form-control" placeholder="Telefone"  autocomplete="off" required="" >    
                                                                                    </div>
                                                                                </div>





                                <!--Fim da coluna-->             </div>

                                 <!--Início da coluna-->          <div class="marcador1 col-md-4">
                                                                        

                                                                              <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Telefone2</label>
                                                                                        <span class="campo-obrigatorio"></span>
                                                                                        <input type="number" name="telefone2_cliente" id="telefone2_cliente" class="form-control" placeholder="Telefone"  autocomplete="off">    
                                                                                    </div>
                                                                                </div>





                                <!--Fim da coluna-->             </div>


                <!--Fechamento da linha-->  </div>



                 <!--Início da linha-->      <div class="row">
                                                   

                                        <!--Início da coluna-->     <div class="marcador1 col-md">

                                                                             <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > RG</label>
                                                                                        <span class="campo-obrigatorio"></span>
                                                                                        <input type="number" name="rg_cliente" id="rg_cliente" class="form-control" target="_blank" data-toggle="tooltip"  title="o preenchimento não é obrigatório Para pessoa júridica" placeholder="RG" autocomplete="off">    
                                                                                    </div>
                                                                                </div>

                                         <!--Fim da coluna-->       </div>

                                         <!--Início da coluna-->    <div class="marcador1 col-md">

                                                                              <div class="form-group">
                                                                                    <div class="col">
                                                                                        <label > Data de Nascimento</label>
                                                                                        <span class="campo-obrigatorio"></span>
                                                                                        <input type="date" name="data_nascimento_cliente" target="_blank" data-toggle="tooltip"  title="o preenchimento não é obrigatório Para pessoa júridica" id="data_nascimento_cliente" class="form-control" placeholder="Data de Nascimento">    
                                                                                    </div>
                                                                                </div>

                                        <!--Fim da coluna-->        </div>


                                          <!--Início da coluna-->    <div class="marcador1 col-md">


                                                                         <div class="form-group">
                                                                                    <div class="   col">
                                                                                         <label > Sexo</label><br />
                                                                                        <label target="_blank" data-toggle="tooltip"  title="o preenchimento não é obrigatório Para pessoa júridica" > Masculino</label>
                                                                                        <input class="form-comtrol" type="radio" name="sexo_cliente" id="exampleRadios1" value="masculino"> 
                                                                                         <label > Femenino</label> 
                                                                                        <input class="form-comtrol" type="radio" name="sexo_cliente" id="exampleRadios1" value="femenino" >    
                                                                                    </div>
                                                                                </div>

                                            
                                        <!--Fim da coluna-->        </div>
                                                                            

                <!--Fechamento da linha-->  </div>

                       <hr />

                       <!--Início da linha-->      <div class="row">
                                                   
                                       <!--Início da coluna-->    <div class="marcador1 col-md-4">


                                                                       <div class="form-group">
                                                                                    <div class="col">
                                                                                        <label > CEP</label>
                                                                                        <span class="campo-obrigatorio"></span>
                                                                                        <input type="number" name="cep_cliente" id="cep_cliente"  class="form-control" onblur="pesquisacep(this.value);"  autocomplete="off" placeholder="CEP">    

                                                                                    </div>
                                                                         </div>

                                            
                                        <!--Fim da coluna-->        </div>
                   

                                        <!--Início da coluna-->    
                                        <div class="marcador1 col-md-4">

                                                                             <div class="form-group">
                                                                                    <div class="col">
                                                                                        <label for="cidade">Cidade</label>
                                                                                        <span class="campo-obrigatorio"></span>
                                                                                           <input type="text" name="cidade_cliente" id="cidade_cliente" readonly class="form-control"   autocomplete="off" placeholder="cidade">  
                                                                                    </div>
                                                                                </div>

                                         <!--Fim da coluna-->      
                                          </div>

                                         <!--Início da coluna-->    
                                         <div class="marcador1 col-md-4">

                                                                              <div class="form-group">
                                                                                    <div class="col">
                                                                                        <label for="estado">Estado</label>
                                                                                        <span class="campo-obrigatorio"></span>                                                                                    
                                                                                       <input type="text" name="uf_cliente" id="uf_cliente" class="form-control" readonly  autocomplete="off" placeholder="Estado">
                                                                                      </div>
                                                                                    </div>

                                        <!--Fim da coluna-->        </div>

                                        <!--Fechamento da linha-->  </div>

                                         <!--Início da linha-->      <div class="row">

                                          <!--Início da coluna-->    <div class="marcador1 col-md-4">


                                                                       <div class="form-group">
                                                                                    <div class="col">
                                                                                        <label > Bairro</label>
                                                                                        <span class="campo-obrigatorio"></span>
                                                                                        <input type="text" name="bairro_cliente" id="bairro_cliente" class="form-control" readonly  autocomplete="off" placeholder="bairro">    

                                                                                    </div>
                                                                         </div>

                                            
                                        <!--Fim da coluna-->        </div>
                                                                            
                                                                                 <!--Início da coluna-->    
                                                                                 <div class="marcador1 col-md-4">

                                                                              <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Nome da Rua</label>
                                                                                        <span class="campo-obrigatorio"></span>
                                                                                        <input type="text" name="rua_cliente" id="rua_cliente" class="form-control" readonly autocomplete="off">    

                                                                                    </div>
                                                                                </div>

                                        <!--Fim da coluna-->        </div>


                                         <!--Início da coluna-->    <div class="marcador1 col-md-4">

                                                                              <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Número da Rua</label>
                                                                                        <span class="campo-obrigatorio"></span>
                                                                                        <input type="text" name="numero_rua_cliente" id="numero_rua_cliente"  class="form-control " autocomplete="off">    

                                                                                    </div>
                                                                                </div>

                                        <!--Fim da coluna-->        </div>

  

                                        <!--Fechamento da linha-->  </div>

                                        

                <br />

                <!--Início da linha-->     
                 <div class="row">
                                                   

                                <!--Início da coluna-->    
                                 <div class="col-md-2 col-4">
                                                                        <button class="btn btn-success  bot" type="submit">Cadastrar</button>
                                 <!--Fim da coluna-->       
                             </div>


                                 <!--Início da coluna-->     
                                 <div class="col-md-2 col-4">
                                                                        <input class="btn btn-success container  bot" type="reset" name="password"  value="Limpar">
                                                                      </form>
                                <!--Fim da coluna-->      
                            </div>                                
                          

                <!--Fechamento da linha-->  
            </div>

            <br />
            <br />
            <br> 

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
