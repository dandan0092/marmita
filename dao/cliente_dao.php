<?php
class ClienteDao {
	public function getConexao() {
		$host = "localhost";
		$user = "id115061_root";
		$pwd  = "root123";
		$bd   = "id115061_marmita";

		// Criar connexao
		$conn = mysqli_connect($host, $user, $pwd, $bd);

		// Checar conexao
		if (!$conn) {
			die("Falha na conexão: " . mysqli_connect_error());
		}

		return $conn;
	}

	public function inserir($campos, $parametros){
		$sql = "INSERT INTO cliente ($campos) VALUES ($parametros)";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

    public function update($id, $nome, $tel, $endereco, $referencia, $data){
		$sql = "UPDATE cliente SET nome=$nome, endereco=$endereco, referencia=$referencia, telefone=$tel, dataNascimento=$data WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

    public function search($campo, $parametro){ 
	    $sql = "SELECT * FROM cliente WHERE $campo=$parametro";
	    $registro = "";
	   
		// Perform queries 
		$conexao = $this->getConexao();

		$results = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($results) > 0) {
		    // output data of each row
			while($row = mysqli_fetch_assoc($results)) {
				$registro = $row["id"] ."][".
					$row["nome"] ."][".
					$row["telefone"] ."][".
					$row["endereco"] ."][".
					$row["referencia"] ."][".
					$row["dataNascimento"];
				break;
		    }
		} else {
		    echo "0 results";
		}

		mysqli_close($conexao);
		return $registro;
    }

    public function getLista(){ 
	    $sql = "SELECT * FROM tercerizada";
		// Perform queries 
		$results = mysqli_query($this->conexao(), $sql);
		if (mysqli_num_rows($results) > 0) {
		    // output data of each row
			$row = mysqli_fetch_assoc($results);
		} else {
		    echo "0 results";
		}

		mysqli_close($this->conexao());
		return $row;
    }

    public function getListaNome(){ 
	    $sql = "SELECT * FROM cliente";
	    $registro = [];
	   
		// Perform queries 
		$conexao = $this->getConexao();

		$results = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($results) > 0) {
		    // output data of each row
		    $i = 0;
			while($row = mysqli_fetch_assoc($results)) {
				$registro[$i] = $row["telefone"]. " - " .$row["nome"];
				$i++;
		    }
		} else {
		    echo "0 results";
		}

		$list = $registro[0];

	   	for ($i = 1; $i < count($registro) ; $i++) { 
	   		# code...
	   		$list = $list . "][" . $registro[$i];
	   	}

		mysqli_close($conexao);
		return $list;
    }

    public function getListaNomeCliente(){ 
	    $sql = "SELECT * FROM cliente";
	    $registro = [];
	   
		// Perform queries 
		$conexao = $this->getConexao();

		$results = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($results) > 0) {
		    // output data of each row
		    $i = 0;
			while($row = mysqli_fetch_assoc($results)) {
				$registro[$i] = $row["nome"];
				$i++;
		    }
		} else {
		    echo "0 results";
		}

		$list = $registro[0];

	   	for ($i = 1; $i < count($registro) ; $i++) { 
	   		# code...
	   		$list = $list . "][" . $registro[$i];
	   	}

		mysqli_close($conexao);
		return $list;
    }

   	public function delete($id) {
		$sql = "DELETE FROM cliente WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

}
?>
