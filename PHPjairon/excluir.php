<?php 
	include_once('listar.php');

	$nome = $_GET['nome'];
	

include_once('conexao.php');

	$sql = "DELETE FROM pessoa WHERE nome = $nome";

	$r = mysqli_query($con, $sql);

	if($r){
		echo "Deletado";
	}else{
		echo "Ocorreu um Erro";
	}

?>