<html>


<style type="text/css">
    /*Responsividade para smartphone*/

          
           @media (mim-width: 567px) {

                .grafico {
                width: 80px;
               
              } 

   </style>           

  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['troca', 'teste'],

           <?php  

                $conexao = new PDO("mysql:host=localhost;dbname=db-gbi","root","F@bio102030");
                $sql= $conexao->prepare("select  * from servicos  where month(data_troca) =  month(current_date())  AND year(data_troca) = year(current_date()); ");
                $sql->execute();
                $fetchAll = $sql->fetchAll();
                

                foreach($fetchAll as $item){
                   //var_dump($item); 
                  $data_troca =  date('d/m/Y', strtotime($item['data_troca']));
                  $proxima_troca = $item['proxima_troca'];

             ?>


          ['<?php echo $data_troca ?>',     <?php echo  $proxima_troca  ?>],  

          <?php   } ?>

          
          
        ]);

        var options = {
          title: 'Trocas Realizadas no Mês Atual'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div class="grafico" id="piechart" style="width: 950p; height: 500px;"></div>
  </body>
</html>
