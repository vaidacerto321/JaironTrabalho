<?php 
	include_once('listar.php');

	$nome = $_POST['nome'];
	

	include_once('conexao.php');

	$sql = "UPDATE  pessoa SET nome = $nome";

	$r = mysqli_query($con, $sql);

	mysql_free_result($dados);
	mysql_close($dados);
	include_once('index.html');

	if($r){
		echo "Alterado";
	}else{
		echo "Ocorreu um Erro";
	}
	

	
?>