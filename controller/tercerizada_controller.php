<?php
include("../dao/tercerizada_dao.php");
extract($_POST);

$dao = new TercerizadaDao();

if ($comando == "inserir") {
	# code...
	$campos = "nome, telefone, email, cnpj, endereco";
	$parametros = "'". $nome ."', '". $tel ."', '". $email ."', '". $cnpj ."', '". $endereco ."'";
	$rs = $dao->inserir($campos,$parametros);
}

if ($comando == "update") {
	# code...
	$rs = $dao->update("'". $id ."'", 
		"'". $nome ."'",
		"'". $tel ."'",
		"'". $email ."'",
		"'". $cnpj ."'",
		"'". $endereco ."'");
}

if ($comando == "getListaNome") {
	# code...
	$rs = $dao->getListaNome();

	//echo print_r($rs, true);
	echo $rs;
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