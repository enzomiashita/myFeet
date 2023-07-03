<?php

Class Usuario{

	private $pdo;
	public $contador = 0;
	public $nome;
	public $telefone;
	public $data_nascimento;
	public $cpf;
	public $endereco;
	public $email;
	public $id_cliente;

	public function conectar() {

		global $pdo;

		$nome = "my_feet";
		$host= "localhost";
		$usuario= "root";
		$senha="";

		$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

	}

	public function cadastrar($nome, $email, $senha, $confirmar_senha) {

		global $pdo;

		$sql = $pdo->prepare("SELECT id_cliente FROM cliente WHERE email_cliente = :e");

		//setando :e com email do usuario
		$sql->bindValue(":e", $email);
		$sql->execute();

		//rowCount() vai analisar se tem valor dentro de $sql 
		if ($sql ->rowCount() > 0) { 
			return false; 
		}else {

			$sql = $pdo->prepare("INSERT INTO cliente(nome_cliente, email_cliente, senha_cliente) VALUES (:n, :e, :s)");

			$sql->bindValue(":n", $nome);
			$sql->bindValue(":e", $email);
			$sql->bindValue(":s", md5($senha));

			$sql->execute();

			return true;
		}

	}

	public function login($email, $senha) {

		global $pdo;

		$sql = $pdo->prepare("SELECT id_cliente FROM cliente WHERE email_cliente = :e AND senha_cliente = :s");

		$sql->bindValue(':e', $email);
		$sql->bindValue(":s", md5($senha));
		$sql->execute();

		

		if ($sql->rowCount() > 0) {

			//Entrar
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_cliente'] = $dado['id_cliente'];
			return true;//logado


		} else {
			return false;
		}

	}

	public function admin($email, $senha) {

		global $pdo;

		$sql = $pdo->prepare("SELECT id_adm	FROM adm WHERE nome_adm = :e AND senha_adm = :s");

		$sql->bindValue(':e', $email);
		$sql->bindValue(":s", $senha);
		$sql->execute();

		if ($sql->rowCount() > 0) {

			//Entrar
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_adm'] = $dado['id_adm'];

			return true;//logado


		} else {
			return false;
		}

	}

	public function cliente() {
		global $pdo;

		$sql = $pdo -> prepare("SELECT * FROM cliente");
		$sql->execute();

		$fetchCliente = $sql->fetchAll();
		$i = 0;
		$conta = 0;
		/*A cada cliente presente na tabela cliente ele ira escrever o cliente*/ 
		foreach($fetchCliente as $key => $value) {
			$i++;
			$conta = $i % 2;
			if($conta <> 0) {
				echo '<tr>';
				echo '<th class="fundo_diferente">Cliente '.$i.										'</th>';
				echo '<th class="fundo_diferente">'.$value['id_cliente'].							'</th>';
				echo '<th class="fundo_diferente">'.$value['nome_cliente'].							'</th>';
				echo '<th class="fundo_diferente">'.$value['telefone_cliente'].						'</th>';
				echo '<th class="fundo_diferente">'.$value['data_nascimento_cliente'].				'</th>';
				echo '<th class="fundo_diferente">'.$value['cpf_cliente'].							'</th>';
				echo '<th class="fundo_diferente">'.$value['endereco_cliente'].						'</th>';
				echo '<th class="fundo_diferente">'.$value['email_cliente'].						'</th>';
				echo '</tr>';
			} else {
				echo '<tr>';
				echo '<th>Cliente '.$i.												'</th>';
				echo '<th>'.$value['id_cliente'].									'</th>';
				echo '<th>'.$value['nome_cliente'].									'</th>';
				echo '<th>'.$value['telefone_cliente'].								'</th>';
				echo '<th>'.$value['data_nascimento_cliente'].						'</th>';
				echo '<th>'.$value['cpf_cliente'].									'</th>';
				echo '<th>'.$value['endereco_cliente'].								'</th>';
				echo '<th>'.$value['email_cliente'].								'</th>';
				echo '</tr>';
			}

			
		}
	}

	public function contador() {
		global $pdo;
		global $contador;
		$maior_id = 0;
		$sql = $pdo -> prepare("SELECT * FROM cliente");
		$sql->execute();

		$fetchCliente = $sql->fetchAll();

		foreach($fetchCliente as $key => $value) {
			$maior_id = $value['id_cliente'];
			while($contador < $maior_id) {
				$contador++;
			}
		}


		return $contador;


	}
	
	public function analisa($id, $campo) {
		global $pdo;
		global $cliente;
		
		

		$sql = $pdo->prepare("SELECT id_cliente FROM cliente WHERE $campo = :i OR $campo LIKE :i");
		$sql->bindValue(':i',$id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			global $cliente;
			$cliente = $id;
			return true;
		}else {
			return false;
		}

		
	}

	public function alterar($id) {
		global $pdo;
		global $cliente;
		global $nome;
		global $telefone;
		global $data_nascimento;
		global $cpf;
		global $endereco;
		global $email;

		$cliente = $id;

		$sql = $pdo -> prepare("SELECT * FROM cliente WHERE id_cliente = :i");
		$sql->bindValue(':i', $cliente);
		$sql->execute();

		$fetchCliente = $sql->fetchAll();

		foreach($fetchCliente as $key => $value) {
			$nome = $value['nome_cliente'];
			$telefone = $value['telefone_cliente'];
			$data_nascimento = $value['data_nascimento_cliente'];
			$cpf = $value['cpf_cliente'];
			$endereco = $value['endereco_cliente'];
			$email = $value['email_cliente'];
		}
	}

	public function values($parametro, $campo) {
		global $pdo;
		global $cliente;
		global $nome;
		global $telefone;
		global $data_nascimento;
		global $cpf;
		global $endereco;
		global $email;
		global $id_cliente;

		$sql = $pdo -> prepare("SELECT * FROM cliente WHERE $campo = :i OR $campo LIKE :i");
		$sql->bindValue(':i', $cliente);
		$sql->execute();
		
		$fetchCliente = $sql->fetchAll(PDO::FETCH_ASSOC);


			if ($parametro == "nome") {
				$nome = $fetchCliente[0]['nome_cliente'];

				return $nome;
			}else if ($parametro == "telefone") {
				$telefone = $fetchCliente[0]['telefone_cliente'];

				return $telefone;
			}else if ($parametro == "data_nascimento") {
				$data_nascimento = $fetchCliente[0]['data_nascimento_cliente'];

				return $data_nascimento;
			}else if ($parametro == "cpf") {
				$cpf = $fetchCliente[0]['cpf_cliente'];

				return $cpf;
			}else if ($parametro == "endereco") {
				$endereco = $fetchCliente[0]['endereco_cliente'];

				return $endereco;
			}else if ($parametro == "email") {
				$email = $fetchCliente[0]['email_cliente'];

				return $email;
			}else if ($parametro == "id") {
				$id_cliente = $fetchCliente[0]['id_cliente'];

				return $id_cliente;
			}
		
	}

	public function excluir($id) {
		global $pdo;

		$sql = $pdo -> prepare("DELETE FROM cliente WHERE id_cliente = :i");
		
		$sql->bindValue(':i',$id);

		$sql->execute();
	}

	
	function alterarSQL($nome, $telefone, $data_nascimento, $cpf, $endereco, $email, $id, $campo) {
		global $pdo;

		$sql = $pdo -> prepare("UPDATE cliente SET nome_cliente = :n, telefone_cliente = :t, data_nascimento_cliente = :d, cpf_cliente = :c, endereco_cliente = :e, email_cliente = :em WHERE $campo = :id");
	
		$sql->bindValue(':n', $nome);
		$sql->bindValue(':t', $telefone);
		$sql->bindValue(':d', $data_nascimento);
		$sql->bindValue(':c', $cpf);
		$sql->bindValue(':e', $endereco);
		$sql->bindValue(':em', $email);
		$sql->bindValue(':id', $id);
	
		$sql->execute();
	}

	public function info($parametro, $id) {
		global $pdo;
		global $cliente;
		global $nome;
		global $telefone;
		global $data_nascimento;
		global $cpf;
		global $endereco;
		global $email;
		global $id_cliente;

		$sql = $pdo -> prepare("SELECT * FROM cliente WHERE id_cliente = :i");
		$sql->bindValue(':i', $id);
		$sql->execute();
		
		$fetchCliente = $sql->fetchAll(PDO::FETCH_ASSOC);


			if ($parametro == "nome") {
				$nome = $fetchCliente[0]['nome_cliente'];

				return $nome;
			}else if ($parametro == "telefone") {
				$telefone = $fetchCliente[0]['telefone_cliente'];

				return $telefone;
			}else if ($parametro == "data_nascimento") {
				$data_nascimento = $fetchCliente[0]['data_nascimento_cliente'];

				return $data_nascimento;
			}else if ($parametro == "cpf") {
				$cpf = $fetchCliente[0]['cpf_cliente'];

				return $cpf;
			}else if ($parametro == "endereco") {
				$endereco = $fetchCliente[0]['endereco_cliente'];

				return $endereco;
			}else if ($parametro == "email") {
				$email = $fetchCliente[0]['email_cliente'];

				return $email;
			}else if ($parametro == "id") {
				$id_cliente = $fetchCliente[0]['id_cliente'];

				return $id_cliente;
			}
		
	}
	
	
















	/*public function altera() {
		global $pdo;
		global $contador;

		$sql = $pdo -> prepare("SELECT * FROM cliente");
		$sql->execute();

		$fetchCliente = $sql->fetchAll();
		$i = 0;
		$conta = 0;
		$j = 0;
		/*A cada cliente presente na tabela cliente ele ira escrever o cliente*/ 
		/*foreach($fetchCliente as $key => $value) {
			$i++;
			$j++;
			$conta = $i % 2;
			if($conta <> 0) {
				echo '<tr>';
				echo '<th class="fundo_diferente">Cliente '.$i.										'</th>';
				echo '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="nome_cliente'.$j.'" value="'.$value['nome_cliente'].						'"></th>';
				echo '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="telefone_cliente'.$j.'" value="'.$value['telefone_cliente'].				'"></th>';
				echo '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="data_nascimento_cliente'.$j.'" value="'.$value['data_nascimento_cliente'].	'"></th>';
				echo '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="cpf_cliente'.$j.'" value="'.$value['cpf_cliente'].							'"></th>';
				echo '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="endereco_cliente'.$j.'" value="'.$value['endereco_cliente'].				'"></th>';
				echo '<th class="fundo_diferente"><input class="caixa_texto_cliente" type="text" name="email_cliente'.$j.'" value="'.$value['email_cliente'].						'"></th>';
				echo '</tr>';
				$contador++;
			} else {
				echo '<tr>';
				echo '<th>Cliente '.$i.										'</th>';
				echo '<th><input class="caixa_texto_cliente" type="text" name="nome_cliente'.$j.'" value="'.$value['nome_cliente'].												'"></th>';
				echo '<th><input class="caixa_texto_cliente" type="text" name="telefone_cliente'.$j.'" value="'.$value['telefone_cliente'].										'"></th>';
				echo '<th><input class="caixa_texto_cliente" type="text" name="data_nascimento_cliente'.$j.'" value="'.$value['data_nascimento_cliente'].							'"></th>';
				echo '<th><input class="caixa_texto_cliente" type="text" name="cpf_cliente'.$j.'" value="'.$value['cpf_cliente'].													'"></th>';
				echo '<th><input class="caixa_texto_cliente" type="text" name="endereco_cliente'.$j.'" value="'.$value['endereco_cliente'].										'"></th>';
				echo '<th><input class="caixa_texto_cliente" type="text" name="email_cliente'.$j.'" value="'.$value['email_cliente'].												'"></th>';
				echo '</tr>';
				$contador++;
			}


			
		}
	}*/

	

}


?>