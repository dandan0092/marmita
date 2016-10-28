<?php
include("../dao/tercerizada_dao.php");
include("../dao/entregador_dao.php");


extract($_POST);

$daoTerc = new TercerizadaDao();
$dao = new EntregadorDao();

if ($comando == "inserir") {
	# code...
	$campos = "nome, telefone, cpf, rg, empresa";
	$parametros = "'". $nome ."', '". $tel ."', '". $cpf ."', '". $rg ."', '". $empresa ."'";
	$rs = $dao->inserir($campos,$parametros);
}

if ($comando == "getListaEmpresa") {
	# code...
	$rs = "<option value=00000000000 name='empresa'>Empresa</option>";
	$rs = $rs . $daoTerc->getListaCnpj();
	echo $rs;
}

if ($comando == "update") {
	# code...
	$rs = $dao->update("'". $id ."'", 
		"'". $nome ."'",
		"'". $tel ."'",
		"'". $cpf ."'",
		"'". $rg ."'",
		"'". $empresa ."'");
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