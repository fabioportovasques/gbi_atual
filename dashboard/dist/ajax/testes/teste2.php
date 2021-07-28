<?php 

	include 'config.php';

		function getFilterEstado($pais){
			$pdo = Conectar();
			$sql = 'SELECT * FROM cliente WHERE cpf_cliente = ?';
			$stm = $pdo->prepare($sql);
			$stm->bindValue(1, $cpf_cliente);
			$stm->execute();
			//sleep(1);
			echo json_encode($stm->fetchAll(PDO::FETCH_ASSOC));
			$pdo = null;
}
	}
