<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


	<?php   

  $cod_veiculo  = $_GET['cod_veiculo'];

  include 'classe/Troca.class.php';

  //Instanciando a class

  $troca = new Troca();
  $info = $troca->getInfo($cod_veiculo);


?>

     

	<label>Filtro combústivel</label>
	<input type="" name="" value="<?php  echo $info['cod_veiculo']  ; ?>">

 
  <label>Filtro combústivel</label>
  <input type="" name="" value="<?php  echo $info['filtro_combustivel']  ; ?>">



</body>
</html>