<?php

require '../../config.php';

         require 'cliente.class.php';

          $cliente = new Cliente();

         $lista = $cliente->pesquisar();
            foreach ($lista as $item):


  ?>
  <?php endforeach; ?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form action="" method="post">
        <label>CPF</label>
        <input type="text" name="cpf_cliente" id="cpf_cliente"    value="<?php echo $item['cpf_cliente']; ?>" >
        
        <label>Nome</label>
        <input type="text" name="nome_cliente" value="<?php echo $item['nome_cliente']; ?>">

         <button type="button" name="pesquisar"  id="cpf_cliente" data-toggle="tooltip">Pesquisar </button>                                                       


    </form>


    <script>
        function buscar(cpf_cliente)
            {
               //O metodo $.ajax é o responsavel pela requisição
                $.ajax

                    ({
                        //configurações
                        type:'POST',//Metodo que está sendo utilizado
                        dataType:'html', // é o Tipo de dado que a pagina vai retornar
                        url:'teste2.php', //indica a página que está sendo solicitada
                        //função que vai ser executada assim que a requuisição for enviada
                        beforeSend: function () {
                            $("dados").html("carregando...");                            
                        },
                        data:{palavra: palavra},//dados para consulta
                        //Função que vai ser executada quando a reqisição for finalizada
                        seccess: function (msg){
                            $("dados").html(msg);
                        }

                    }); 
            }

            $('#cpf_cliente').click(function(){
                buscar($('#cpf_cliente').val())
            });
        


    </script>


</body>
</html>