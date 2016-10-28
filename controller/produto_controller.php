<?php
include("../dao/produto_dao.php");

extract($_POST);

$dao = new ProdutoDao();

if ($comando == "inserir") {
	# code...
	$campos = "nome, descricao, preco, tamanho, disponivel";
	$parametros = "'". $nome ."', '". $descricao ."', '". $preco ."', '". $tamanho ."', '". $disponivel ."'";
	$rs = $dao->inserir($campos,$parametros);
}

if ($comando == "update") {
	# code...
	$rs = $dao->update("'". $id ."'", 
		"'". $nome ."'",
		"'". $descricao ."'",
		"'". $preco ."'",
		"'". $tamanho ."'",
		"'". $disponivel ."'");
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

