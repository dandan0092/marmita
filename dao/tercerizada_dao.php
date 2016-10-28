<?php
class TercerizadaDao {
	public function getConexao() {
		$host = "localhost";
		$user = "root";
		$pwd  = "root";
		$bd   = "marmita";

		// Criar connexao
		$conn = mysqli_connect($host, $user, $pwd, $bd);

		// Checar conexao
		if (!$conn) {
			die("Falha na conexão: " . mysqli_connect_error());
		}

		return $conn;
	}

	public function inserir($campos, $parametros){
		$sql = "INSERT INTO tercerizada ($campos) VALUES ($parametros)";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

    public function update($id, $nome, $tel, $email, $cnpj, $endereco){
		$sql = "UPDATE tercerizada SET nome=$nome, endereco=$endereco, cnpj=$cnpj, telefone=$tel, email=$email WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

    public function search($campo, $parametro){ 
	    $sql = "SELECT * FROM tercerizada WHERE $campo=$parametro";
	    $registro = "";
	   
		// Perform queries 
		$conexao = $this->getConexao();

		$results = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($results) > 0) {
		    // output data of each row
			while($row = mysqli_fetch_assoc($results)) {
				$registro = $row["id"] ."][".
					$row["nome"] ."][".
					$row["endereco"] ."][".
					$row["cnpj"] ."][".
					$row["telefone"] ."][".
					$row["email"];
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
	    $sql = "SELECT * FROM tercerizada";
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

    public function getListaCnpj(){ 
	    $sql = "SELECT * FROM tercerizada";
	    $registro = "";
		// Perform queries 
		$conexao = $this->getConexao();

		$results = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($results) > 0) {
		    // output data of each row
			while($row = mysqli_fetch_assoc($results)) {
				$registro = $registro . "<option value=".$row["cnpj"]." name='empresa'>".$row["nome"]."</option>";
		    }
		} else {
		    echo "0 results";
		}

		mysqli_close($conexao);
		return $registro;
    }

   	public function delete($id) {
		$sql = "DELETE FROM tercerizada WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }
}
?>