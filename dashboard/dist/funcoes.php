<?php
	$msg = $_POST["msg"];
	switch($msg){
		case 'pesquisar':
			include("pesquisar.php");
			break;
		case 'url2':
			include("url_do_scrip_2.php");
			break;
	}
?>


 