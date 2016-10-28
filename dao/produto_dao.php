<?php
class ProdutoDao {
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
		$sql = "INSERT INTO produto ($campos) VALUES ($parametros)";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

    public function update($id, $nome, $descricao, $preco, $tamanho, $disponivel){
		$sql = "UPDATE produto SET nome=$nome, descricao=$descricao, preco=$preco, tamanho=$tamanho, disponivel=$disponivel WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

    public function getListaNome(){ 
	    $sql = "SELECT * FROM produto";
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

    public function getLista(){ 
	    $sql = "SELECT * FROM produto";
	    $nome = [];
	    $id = [];
	    $preco = [];
	   	$descricao = [];
		// Perform queries 
		$conexao = $this->getConexao();

		$results = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($results) > 0) {
		    // output data of each row
		    $i = 0;
			while($row = mysqli_fetch_assoc($results)) {
				$id[$i] = $row["id"];
				$nome[$i] = $row["nome"];
				$preco[$i] = $row["preco"];
				$descricao[$i] = $row["descricao"];
				$i++;
		    }
		} else {
		    echo "0 results";
		}

		$list = $id[0]. "||" . $nome[0] . "||" . $preco[0] . "||" . $descricao[0];

	   	for ($i = 1; $i < count($nome) ; $i++) {
	   		# code...
	   		$list = $list . "][" . $id[$i]. "||" . $nome[$i] . "||" . $preco[$i] . "||" . $descricao[$i];
	   	}


		mysqli_close($conexao);
		return $list;
    }


    public function search($campo, $parametro){ 
	    $sql = "SELECT * FROM produto WHERE $campo=$parametro";
	    $registro = "";
	   
		// Perform queries 
		$conexao = $this->getConexao();

		$results = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($results) > 0) {
		    // output data of each row
			while($row = mysqli_fetch_assoc($results)) {
				$registro = $row["id"] ."][".
					$row["nome"] ."][".
					$row["descricao"] ."][".
					$row["preco"] ."][".
					$row["tamanho"] ."][".
					$row["disponivel"];
				break;
		    }
		} else {
		    echo "0 results";
		}

		mysqli_close($conexao);
		return $registro;
    }

    public function delete($id) {
		$sql = "DELETE FROM produto WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

}
?>