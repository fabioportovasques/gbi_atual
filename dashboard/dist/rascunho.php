public function adicionar ($cpf_cliente,$nome_cliente = '') {

			if ($this->existeCpf($cpf_cliente) == false) {
				$sql = "INSERT INTO cliente (nome_cliente,sobrenome_cliente,telefone1_cliente,telefone2_cliente,cpf_cliente,rg_cliente,rua_cliente,numero_rua_cliente,cidade_cliente,uf_cliente,pais_cliente,data_nascimento_cliente,sexo_cliente,bairro_cliente,	login_cod_login)VALUES (:nome_cliente,:sobrenome_cliente,:telefone1_cliente,:telefone2_cliente,cpf_cliente,:cpf_cliente,:rg_cliente,:rua_cliente,:numero_rua_cliente,:cidade_cliente,:uf_cliente,:pais_cliente,:data_nascimento_cliente_cliente,:sexo_cliente,:bairro_cliente,:	login_cod_login)";
				$sql = $this->pdo->prepare($sql);
				$sql -> bindValue(':nome_cliente',$nome);
				$sql -> bindValue(':sobrenome_cliente',$sobrenome_cliente);
				$sql -> bindValue(':telefone1_cliente',$telefone1_cliente);
				$sql -> bindValue(':telefone2_cliente',$telefone2_cliente);
				$sql -> bindValue(':cpf_cliente',$cpf_cliente);
				$sql -> bindValue(':rg_cliente',$rg_cliente);
				$sql -> bindValue(':rua_cliente',$rua_cliente);
				$sql -> bindValue(':numero_rua_cliente',$numero_rua_cliente);
				$sql -> bindValue(':cidade_cliente',$cidade_cliente);
				$sql -> bindValue(':uf_cliente',$uf_cliente);
				$sql -> bindValue(':pais_cliente',$pais_cliente);
				$sql -> bindValue(':data_nascimento_cliente',$data_nascimento_cliente);
				$sql -> bindValue(':sexo_cliente',$sexo_cliente);
				$sql -> bindValue(':bairro_cliente',$bairro_cliente);
				$sql -> bindValue(':login_cod_login',$login_cod_login);
				$sql -> execute();


				echo "Cadastrado com sucesso";

			} else {
				return false;
			}
		
		}


		public function adicionar ($nome_cliente,$sobrenome_cliente,$telefone1_cliente,$telefone2_cliente,$cpf_cliente,$rua_cliente,$numero_rua_cliente,$cidade_cliente,$uf_cliente,$pais_cliente,$data_nascimento_cliente,$sexo_cliente,$bairro_cliente) {
				$sql = $this->pdo->prepare("INSERT INTO cliente SET nome_cliente = :nome_cliente, sobrenome_cliente = :sobrenome_cliente,telefone1_cliente= :telefone1_cliente,telefone2_cliente=:telefone2_cliente,cpf_cliente=:cpf_cliente,rg_cliente=:rg_cliente,rua_cliente=:rua_cliente,numero_rua_cliente=:numero_rua_cliente,cidade_cliente=:cidade_cliente,uf_cliente=:uf_cliente,pais_cliente=:pais_cliente,data_nascimento_cliente=:data_nascimento_cliente,sexo_cliente=:sexo_cliente,bairro_cliente=:bairro_cliente");
				$sql->bindParam(":nome_cliente",$nome_cliente);
				$sql->bindParam(":sobrenome_cliente",$sobrenome_cliente);
				$sql->bindParam(":telefone1_cliente",$telefone1_cliente);
				$sql->bindParam(":telefone2_cliente",$telefone2_cliente);
				$sql->bindParam(":cpf_cliente",$cpf_cliente);
				$sql->bindParam(":rg_cliente",$rg_cliente);
				$sql->bindParam(":rua_cliente",$rua_cliente);
				$sql->bindParam(":numero_rua_cliente",$numero_rua_cliente);
				$sql->bindParam(":cidade_cliente",$cidade_cliente);
				$sql->bindParam(":uf_cliente",$uf_cliente);
				$sql->bindParam(":pais_cliente",$pais_cliente);
				$sql->bindParam(":data_nascimento_cliente",$data_nascimento_cliente);
				$sql->bindParam(":sexo_cliente",$sexo_cliente);
				$sql->bindParam(":bairro_cliente",$bairro_cliente);
				$sql->execute();
			
				echo "Cadastrado com sucesso";
		
		}
