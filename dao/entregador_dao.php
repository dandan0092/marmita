<?php
class EntregadorDao {
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
		$sql = "INSERT INTO entregador ($campos) VALUES ($parametros)";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }
    public function update($id, $nome, $tel, $cpf, $rg, $empresa){
		$sql = "UPDATE entregador SET nome=$nome, telefone=$tel, cpf=$cpf, rg=$rg, empresa=$empresa WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }


    public function getListaId(){ 
	    $sql = "SELECT * FROM entregador";
	    $registro = "";
		// Perform queries 
		$conexao = $this->getConexao();

		$results = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($results) > 0) {
		    // output data of each row
			while($row = mysqli_fetch_assoc($results)) {
				$registro = $registro . "<option value=".$row["id"]." name='entregador'>".$row["nome"]."</option>";
		    }
		} else {
		    echo "0 results";
		}

		mysqli_close($conexao);
		return $registro;
    }


    public function getListaNome(){
	    $sql = "SELECT * FROM entregador";
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

    public function search($campo, $parametro){ 
	    $sql = "SELECT * FROM entregador WHERE $campo=$parametro";
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
					$row["cpf"] ."][".
					$row["rg"] ."][";

				$param =  "'". $row["empresa"] ."'";
				//Pegar dados da empresa
				$sql = "SELECT * FROM tercerizada WHERE cnpj=$param";
				$results = mysqli_query($conexao, $sql);

				if (mysqli_num_rows($results) > 0) {
					while($row = mysqli_fetch_assoc($results)) {
						$registro = $registro . $row["cnpj"] ."][". $row["nome"];
						break;
					}
				}


				break;
		    }
		} else {
		    echo "0 results";
		}

		mysqli_close($conexao);
		return $registro;
    }

   	public function delete($id) {
		$sql = "DELETE FROM entregador WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();

		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

}
?>
