<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>crud</title>
</head>
		
		<?php require_once'conect_db.php; ';
		?>
<body>


		<p> </p>
		<h1> tabela de pessoas </h1>

		<table border="1" id="">
			
			<tr>
				<td> Nome </td>
				<td> Alterar </td>
				<td> Excluir </td>  
			</tr>

				<?php
				    include_once('conexao.php');
				    $resultado = mysql_query("SELECT * FROM t_cidade", $dbconn);
				    if ($resultado) {
				    while ($row = mysql_fetch_assoc ($resultado)){
				    ?>

				    <tr>
				    	<td> <?php echo "<p></p>", $row['idt_pessoa']; ?> </td>
				    	<td> <?php echo "<p></p>", $row['nome_pessoa']; ?> </td>
				    	<td><a href="Alterar.php?Nome=<?php echo $row ['idt_pessoa'];?>"> Alterar</a></td>
				    	<td><a href="Alterar.php?Nome=<?php echo $row ['idt_pessoa'];?>"> Excluir</a></td>
				    </tr>

				    <?php
				    }

				    }

				    mysql_close($dbconn);
				    ?>	

		</table>
</body>
</html>