<?php
class PedidoDao {
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
		$sql = "INSERT INTO pedido ($campos) VALUES ($parametros)";
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

    public function setEntregador($id, $idEntregador, $status){
		$sql = "UPDATE pedido SET id_entregador=$idEntregador, status=$status WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

    public function setEntregue($id, $status){
		$sql = "UPDATE pedido SET status=$status WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

    public function cancelPedido($id){
		$sql = "UPDATE pedido SET status='Cancelado' WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }    


    public function getListaPedido(){
	    $sql = "SELECT * FROM pedido WHERE status='Pendente' OR status='Em trânsito...'";
	    $registro = "";
	    

	   
		// Perform queries 
		$conexao = $this->getConexao();

		$results = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($results) > 0) {
		    // output data of each row
			while($row = mysqli_fetch_assoc($results)) {
				$registro = $registro . $row["id"] .",". $row["id_cliente"] .","
					. $row["recebido"] .",". $row["produtos"] .",". $row["status"] .",". "}{";

		    }
		} else {
		    echo "";
		}


		mysqli_close($conexao);
		return $registro;
    }

    public function getRelatorio($dias){
	   $sql = "SELECT * FROM pedido WHERE data > DATE_SUB(DATE(NOW()), INTERVAL DAYOFWEEK(NOW()) + $dias DAY)";
	   // $sql = "SELECT * FROM pedido ";
	    $registro = "";
	    

	   
		// Perform queries 
		$conexao = $this->getConexao();

		$results = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($results) > 0) {
		    // output data of each row
			while($row = mysqli_fetch_assoc($results)) {
				$registro = $registro . $row["id"] .",". $row["id_cliente"] .","
					. $row["recebido"] .",". $row["produtos"] .",". $row["status"] .",". $row["id_entregador"] .",". $row["data"] .",". "}{";

		    }
		} else {
		    echo "";
		}

		mysqli_close($conexao);
		return $registro;
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
		$sql = "DELETE FROM produto WHERE id=$id";
		// Perform queries 
		
		//$this->getConexao();
		$conexao = $this->getConexao();
		
		mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

		mysqli_close($conexao);
    }

}
?>
