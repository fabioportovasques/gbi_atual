  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['n rua', 'CEP'],
         
          <?php  

                $conexao = new PDO("mysql:host=localhost;dbname=db-gbi","root","F@bio102030");
                $sql= $conexao->prepare("

                   select  
            c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, v.tipo_veiculo,v.cor_veiculo, v.fabricante_veiculo,
       v.modelo_veiculo,v.placa_veiculo,v.cliente_codcliente
        FROM cliente AS c
        JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente;




                  ");
                $sql->execute();
                $fetchAll = $sql->fetchAll();
                

                foreach($fetchAll as $item){
                   //var_dump($item); 
                  $cpf_cliente=$item['cpf_cliente'];
                  $nome_cliente = $item['nome_cliente'];

             ?>






          ['<?php echo $cpf_cliente ?>',   '<?php echo $cpf_cliente  ?>'],
          <?php } ?>
        ]);

        var options = {
          title: 'clientes',
          curveType: 'clientes 2',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
