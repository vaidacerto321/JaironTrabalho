<?php  include_once('index.html');
	include_once('conexao.php');
	$numero = $_POST['n'];
	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	
	$sql = "INSERT INTO ALUNO (NUMERO, NOME, SEXO) VALUES ($numero, '$nome', '$sexo')";

	$r = mysqli_query($con, $sql);
	if ($r) {
		echo "Aluno cadastrado com sucesso!";
	}else{
		echo "Erro ao cadastrar.";
	}
?>