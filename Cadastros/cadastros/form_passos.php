<!DOCTYPE html>
	<html>
	<head>
		<title>Cadastros dos Passos</title>
	</head>
	<body>

		<?php $id = $_GET['id']; ?>
		<form action="add_passos.php?id=<?=$id?>" method="POST">
			<input type="number" name="numero" placeholder="Número">

			<input type="text" name="titulo" placeholder="Título">

			<input type="text" name="descricao" placeholder="Descrição">

			<input type="submit" name="Cadastrar">		

		</form>
	</body>
	</html>