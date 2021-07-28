<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastrto de Clientes</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


     <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>   

   


    </head>
    <body class="sb-nav-fixed">
       <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse"id="navbarTogglerDemo01">
    <ul class="navbar-nav  mr-auto mt-2 mt-lg-0">
      
       <li class="nav-item">
        <a class="text-light" href="#">DASHBOARD</a>
      </li>
       
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Insira a placa" aria-label="Pesquisar" data-toggle="tooltip" data-placement="left" title="Insira a placa no formato 'xxxxxx' sem espaços">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
  
    </form>
 
<ul class="navbar-nav ml-auto ml-md-0">
    <li>   
            
        
                                <a class="text-light" href="#">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
                                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z"/>
                                      <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z"/>
                                </svg>
                             LOGOUT</a>
             
    </li>
            
</ul>

 

</nav>


        
            <!--conteudo do meio -->

           
   <!--Início container--> <div class="container marcador-container1">

                                            <br />
                                            <br />
                                            <br />
                                            <br />
                                            

                                           <h4 class="text-center">Dados Do Cliente</h4><br />
                                          
                <!--Início da linha-->     <div class="row">

                    
                    

                                <!--Início da coluna-->          <div class="marcador1 col-md">
                                                                       
                                                                            <form action=""  method="POST" name="cad-func" > 
                                                                                
                                                                                <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Nome do Cliente</label>
                                                                                        <span class="campo-obrigatorio">*</span>
                                                                                        <input type="text" name="nome-cliente" id="nome-cliente" class="form-control "  required="" >    
                                                                                    </div>
                                                                                </div>

                                 <!--Fim da coluna-->            </div>

                                 <!--Início da coluna-->         <div class="marcado1r col-md">
                                                                        
                                                                                <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > CPF</label>
                                                                                          <span class="campo-obrigatorio"></span>
                                                                                        <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" autocomplete="off" >    

                                                                                    </div>
                                                                                </div>


                                <!--Fim da coluna-->             </div>
                                                                    

                                <!--Início da coluna-->          <div class="marcador1 col-md">
                                                                        

                                                                              <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Telefone</label>
                                                                                        <span class="campo-obrigatorio">*</span>
                                                                                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="telefone"  autocomplete="off" required="" >    
                                                                                    </div>
                                                                                </div>


                                <!--Fim da coluna-->             </div>


                <!--Fechamento da linha-->  </div>



                 <!--Início da linha-->      <div class="row">
                                                   

                                        <!--Início da coluna-->     <div class="marcador1 col-md">

                                                                     <div class="form-group">
                                                                                    <div class="col">
                                                                                        <label for="cidade">UF</label>
                                                                                        <span class="campo-obrigatorio"></span>
                                                                                            <select class="form-control" id="cidade-func" name="cidade-func" required="">
                                                                                                <option>RS</option>
                                                                                                <option>SC</option>
                                                                                                <option>RJ</option>
                                                                                                <option>...</option>
                                                                                            </select>    
                                                                                    </div>
                                                                                </div>

                                         <!--Fim da coluna-->       </div>

                                         <!--Início da coluna-->    <div class="marcador1 col-md">

                                                              <div class="form-group">
                                                                                    <div class="col">
                                                                                        <label for="cidade">Cidade</label>
                                                                                        <span class="campo-obrigatorio"></span>
                                                                                            <select class="form-control" id="cidade-func" name="cidade-func" required="">
                                                                                                <option>Bagé</option>
                                                                                                <option>Hulha</option>
                                                                                                <option>Candiota</option>
                                                                                                <option>...</option>
                                                                                            </select>    
                                                                                    </div>
                                                                                </div>
                                        <!--Fim da coluna-->        </div>


                                         
                                                                            

                <!--Fechamento da linha-->  </div>

                 <!--Início da linha-->      <div class="row">

                     <!--Início da coluna-->    <div class="marcador1 col-md">


                                                                  <div class="form-group">
                                                                                    <div class="col-md">
                                                                                        <label for="cidade">Bairro</label>
                                                                                        <span class="campo-obrigatorio"></span>
                                                                                            <select class="form-control" id="cidade-func" name="cidade-func" required="">
                                                                                                <option>sete de setembro</option>
                                                                                                <option>pedra branca</option>
                                                                                                <option>General Osório</option>
                                                                                                <option>...</option>
                                                                                            </select>    
                                                                                    </div>
                                                                                </div>
                                            
                    <!--Fim da coluna-->        </div>
                                                   

                                        <!--Início da coluna-->     <div class="marcador1 col-md">

                                                                             <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Numero da rua</label>
                                                                                        <input type="number" name="numero-rua" id="numero-rua" class="form-control " placeholder="Numero da rua" autocomplete="off" >    
                                                                                    </div>
                                                                                </div>

                                         <!--Fim da coluna-->       </div>

                    <!--fim da linha-->     </div>    

                     <hr>  

                    <br />
                    <br />

                     <h4 class="text-center">Dados Do Veículo</h4><br />



               
                   




                       <!--Início da linha-->      <div class="row">
                                                   

                                        <!--Início da coluna-->     <div class="marcador1 col-md">

                                                                             <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label >Modelo do Veicúlo</label>
                                                                                          <span class="campo-obrigatorio">*</span>
                                                                                        <input type="text" name="mod-veiculo" id="mod-veiculo" class="form-control " placeholder="Modelo do Veículo" autocomplete="off" >    
                                                                                    </div>
                                                                                </div>

                                         <!--Fim da coluna-->       </div>

                                



                                          <!--Início da coluna-->    <div class="marcador1 col-md">


                                                                        <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Placa</label>
                                                                                        <span class="campo-obrigatorio">*</span>
                                                                                        <input type="text" name="placa" id="placa" class="form-control " autocomplete="off" required="" placeholder="Placa">    
                                                                                    </div>
                                                                                </div>

                                            
                                        <!--Fim da coluna-->        </div>

                                           <!--Início da coluna-->    <div class="marcador1 col-md">


                                                                        <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > KM</label>
                                                                                        <span class="campo-obrigatorio">*</span>
                                                                                        <input type="number" name="km" id="km" class="form-control " autocomplete="off" required="" placeholder="KM">    
                                                                                    </div>
                                                                                </div>

                                            
                                        <!--Fim da coluna-->        </div>


                                                                            

                <!--Fechamento da linha-->  </div>




                 <!--Início da linha-->      <div class="row">
                                                   

                                      
                                          <!--Início da coluna-->    <div class="marcador1 col-md">


                                                                        <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Filtro do Óleo</label>
                                                                                        <span class="campo-obrigatorio">*</span>
                                                                                        <input type="text" name="filtro-oleo" id="filtro-oleo" class="form-control " autocomplete="off" required="" placeholder="Filtro do Óleo">    
                                                                                    </div>
                                                                                </div>

                                            
                                        <!--Fim da coluna-->        </div>

                    <!--Início da coluna-->    <div class="marcador1 col-md">


                                                                        <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Filtro do Combústivel</label>
                                                                                        <span class="campo-obrigatorio">*</span>
                                                                                        <input type="text" name="filtro-combustivel" id="filtro-combustivel" class="form-control " autocomplete="off" required="" placeholder="Filtro Combústivel">    
                                                                                    </div>
                                                                          </div>

                                            
                    <!--Fim da coluna-->        </div>


                                         

                    <!--Início da coluna-->    <div class="marcador1 col-md">


                                                                        <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Filtro do Ar</label>
                                                                                        <span class="campo-obrigatorio">*</span>
                                                                                        <input type="text" name="filtro-ar" id="filtro-ar" class="form-control " autocomplete="off" required="" placeholder="Filtro do Ar">    
                                                                                    </div>
                                                                                </div>

                                            
                <!--Fim da coluna-->        </div>
                                                                            

                <!--Fechamento da linha-->  </div>


                   <!--Início da linha-->      <div class="row">
                                                   

                                      
                                          <!--Início da coluna-->    <div class="marcador1 col-md">


                                                                        <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Filtro da Cabine</label>
                                                                                        <span class="campo-obrigatorio">*</span>
                                                                                        <input type="text" name="filtro-cabine" id="filtro-cabine" class="form-control " autocomplete="off" required="" placeholder="Filtro da Cabine">    
                                                                                    </div>
                                                                                </div>

                                            
                                        <!--Fim da coluna-->        </div>

                    <!--Início da coluna-->    <div class="marcador1 col-md">


                                                                        <div class="form-group">
                                                                                    <div class="   col">
                                                                                        <label > Data da Troca</label>
                                                                                        <span class="campo-obrigatorio">*</span>
                                                                                        <input type="date" name="data-troca" id="data-troca" class="form-control " autocomplete="off" required="">    
                                                                                    </div>
                                                                          </div>

                                            
                    <!--Fim da coluna-->        </div>


                                         
                     <!--Início da coluna-->    <div class="marcador1 col-md">


                                                                        <div class="form-group">
                                                                                    <div class="   col">
                                                                                           <label> OBS</label>
                                                                                        <textarea class="form-control"></textarea>
                                                                                    </div>
                                                                          </div>

                                            
                    <!--Fim da coluna-->        </div>
                 
                                                                            

                <!--Fechamento da linha-->  </div>


                

                <br />

                <!--Início da linha-->      <div class="row">
                                                   

                                <!--Início da coluna-->     <div class="bot1 col-md-2">
                                                                        <button class="btn btn-success btn-block" type="submit">Cadastrar</button>
                                 <!--Fim da coluna-->       </div>


                                 <!--Início da coluna-->     <div class="bot1 col-md-2">
                                                                        <input class="btn btn-success container btn-block" type="reset" name="password"  value="Limpar">
                                <!--Fim da coluna-->      </div>                                

                <!--Fechamento da linha-->  </div>










   <!--Fechamento container--> </div>           






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
</html>
