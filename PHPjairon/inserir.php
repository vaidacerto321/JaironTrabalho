<?php  

require_once'conexao.php';
$number = $_POST['numero'];
$name= $_POST['nome'];
$sex = $_POST['sexo'];

$sql = "INSERT INTO alunos (numero,nome,sexo) VALUES ('$number','$name', '$sex')";
$r = mysqli_query($con,$sql);

if($r){
	echo "cadastrado com sucesso";
}else{
	echo "errro ao cadastrar";
}

?>