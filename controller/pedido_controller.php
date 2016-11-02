<?php
include("../dao/pedido_dao.php");
include("../dao/produto_dao.php");
include("../dao/cliente_dao.php");
include("../dao/entregador_dao.php");



extract($_POST);

$dao = new PedidoDao();
$daoProd = new ProdutoDao();
$daoClient = new ClienteDao();
$daoEntreg = new EntregadorDao();

$servidor = &$_SERVER["SERVER_NAME"];


if ($comando == "inserir") {
	# code...
	$campos = "id_cliente, recebido, produtos, status, data";
	$status = "Pendente";
	$data = date('Y-m-d');
	$parametros = "'". $idCliente ."', '". $recebido ."', '". $produtos ."', '". $status ."', '". $data ."' ";
	$rs = $dao->inserir($campos, $parametros);
}

if ($comando == "update") {
	# code...
	$rs = $dao->update("'". $id ."'", 
		"'". $nome ."'",
		"'". $tel ."'",
		"'". $endereco ."'",
		"'". $referencia ."'",
		"'". $data ."'");
}

if ($comando == "cancelPedido") {
	# code...
	$rs = $dao->cancelPedido("'". $id ."'");
	echo "1";
}

if ($comando == "setEntregador") {
	# code...
	$status = "Em trânsito...";
	$rs = $dao->setEntregador("'". $id ."'", "'". $idEntregador ."'", "'". $status ."'");
	echo "1";
}


if ($comando == "setEntregue") {
	# code...
	$status = "Entregue";
	$rs = $dao->setEntregue("'". $id ."'", "'". $status ."'");
	echo "1";
}

if ($comando == "getListaEntregador") {
	# code...
	$rs = "<option value=0 name='entregador'>Entregador</option>";
	$rs = $rs . $daoEntreg->getListaId();
	echo $rs;
}

if ($comando == "getListaProduto") {
	# code...
	$rs = $daoProd->getLista();

	$list = explode("][", $rs);
	$html = "<table align='left'>";

	for ($i = 0; $i < count($list) ; $i++) { 
		# code...
	    		

			$produto = explode("||", $list[$i]);
			
			for ($j = 0; $j < 1 ; $j++) {
				$html = $html . "<tr><td><p><input type='checkbox' title='". $produto[3] ."' id='p". $produto[0] ."' value='p". $produto[1] ."' name='". $produto[0] ."' onchange='soma()'><b> ". $produto[1] . " - ".$produto[2] 
				." </b><input type='number' min='0' max='999' step='1' name='". $produto[2] ."' id='q". $produto[0] ."' value='0' autocomplete='off' onchange='soma()' onkeyup='soma()' requerid ></p></td>
					<th width='110px'></td>
				</tr>";
			}
			
			
	}
	//echo print_r($rs, true);
	$html = $html . "</table>";
	echo $html;
}

if ($comando == "relatorio") {
	# code...
	$rs = $dao->getRelatorio("'". $dias ."'");
				// $registro = $registro . $row["id"] .",". $row["id_cliente"] .","
				// 	. $row["recebido"] .",". $row["produtos"] .",". $row["status"] .",". "][";
	$list = explode("}{", $rs);
	$html = 
	"<!DOCTYPE html>
	<html>
	<head>
		<title>Relatório</title>
	</head>
	<body align='center'>
		<button onclick='imprimir()' >Relatório</button>

		<script>
		function imprimir() {
		    window.print();
		}
		</script>

		<table align='center'>
			 <tr>
			   <th>ID Pedido</th>
			   <th>Cliente</th>
			   <th>Entregador</th>
			   <th>Status</th>
			   <th>Data</th>
			 </tr>

	";
		# code...
	for ($i = 0; $i < count($list) ; $i++) { 
		# code...
				# code...
		if ($list[$i] != "") {

			$pedido = explode(",", $list[$i]);
			$id_pedido = $pedido[0];
			$id_cliente = $pedido[1];
			$recebido = $pedido[2];
			$list_produto = $pedido[3];
			$status = $pedido[4];
			$id_entregador = $pedido[5];
			$data = $pedido[6];

			$html =  $html . "<tr>";

			$cId = $daoClient->search("id", "'". $id_cliente ."'");
			$cliente = explode("][", $cId);
			$nome_cliente = $cliente[1];
			
			$nome_entredagor = "";
			if ($id_entregador != NULL) {
				# code...
				$rsEntregador = $daoEntreg->search("id", "'". $id_entregador ."'");
				$entregador = explode("][", $rsEntregador);
				$nome_entredagor = $entregador[1];
				
			}		

			$data_pedido = new DateTime($data);
			$html = $html . "   <td>". $id_pedido ."</td> 
   								<td>". $nome_cliente ."</td>
   								<td>". $nome_entredagor ."</td>
   								<td>". $status ."</td>
								<td>". $data_pedido->format('d/m/Y') ."</td> 

			";
			$html = $html . "</tr>";
		}
 


	}

	if($html == "") { echo "Não há pedidos pendentes..."; }
	

	$html = $html . "
			</table>
		</body>
	</html>";

	echo $html;
}

if ($comando == "getListaPedido") {
	$rs = $dao->getListaPedido();
	$list = explode("}{", $rs);
	$html = "";
		# code...
	for ($i = 0; $i < count($list) ; $i++) { 
		# code...
				# code...
		if ($list[$i] != "") {

			# code...
			$pedido = explode(",", $list[$i]);
			$id_pedido = $pedido[0];
			$id_cliente = $pedido[1];
			$recebido = $pedido[2];
			$list_produto = $pedido[3];
			$status = $pedido[4];

			$html =  $html . "<div id='". $id_pedido ."'><p>";

			$cId = $daoClient->search("id", "'". $id_cliente ."'");
			$cliente = explode("][", $cId);
			$nome_cliente = $cliente[1];
			
			$html = $html . " &#183; <input type='text' size='40' idcliente='". $id_cliente ."' value='". $nome_cliente ."' readonly >
			  <input type='image' src='../img/icon_entregador.jpg' height='16px' width='16px' onclick='entregador(". $id_pedido .")'>
			  <input type='image' src='../img/icon_ok.png' height='16px' width='16px' onclick='entregue(". $id_pedido .")'>
			  <input type='image' src='../img/icon_cancelar.png' height='16px' width='16px' onclick='deletePedido(". $id_pedido .")'> &#124; <label id='status'>". $status ."</label>
			<br>";
			$html = $html . "</p></div>";
		}
 


	}

	if($html == "") { echo "Não há pedidos pendentes..."; }
	
	echo $html;
}

if ($comando == "search") {
	$rs = $dao->search($campo, "'". $nome ."'");
	echo $rs;

}

if ($comando == "delete") {
	# code...
	$rs = $dao->delete("'". $id ."'");
	echo "1";
}

?>
