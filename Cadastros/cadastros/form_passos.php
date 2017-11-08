<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Cadastro Passos</title>
</head>
<body>
	<form action= "add_passos.php" method="POST">
		<input type="number" name="numero" placeholder="Número" required/> 
		<input type="text" name="titulo" placeholder="Título" required/> 
		<input type="text" name="descricao" placeholder="Descrição" required/> 
		<input type="submit">
	</form>
</body>
</html>