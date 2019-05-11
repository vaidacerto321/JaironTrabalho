<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
</head>
<body>
<form action="index.php" method="POST">
	nome<input type="text" name="nome" placeholder="nome">
	<input type="submit" name="enviar">

</form>
</body>
<?php

include_once("conexao.php");
if(isset($_POST['enviar'])){
	$nome = $_POST['nome'];
	mysqli_query($con,"INSERT INTO t_pessoa (nome) VALUES ('$nome')");
	mysqli_close($con);


}



?>
</html>