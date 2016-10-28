<?php
include("../dao/cliente_dao.php");

extract($_POST);

$dao = new ClienteDao();


if ($comando == "inserir") {
	# code...
	$campos = "nome, telefone, endereco, referencia, dataNascimento";
	$parametros = "'". $nome ."', '". $tel ."', '". $endereco ."', '". $referencia ."', '". $data ."'";
	$rs = $dao->inserir($campos,$parametros);
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

if ($comando == "getListaNome") {
	# code...
	$rs = $dao->getListaNome();

	//echo print_r($rs, true);
	echo $rs;
} 

if ($comando == "getListaNomeCliente") {
	# code...
	$rs = $dao->getListaNomeCliente();

	//echo print_r($rs, true);
	echo $rs;
}

if ($comando == "search") {
	$rs = $dao->search($campo, "'". $tel ."'");
	echo $rs;

}

if ($comando == "searchCliente") {
	$rs = $dao->search($campo, "'". $nome ."'");
	echo $rs;

}

if ($comando == "delete") {
	# code...
	$rs = $dao->delete("'". $id ."'");
	echo "1";
}

?>