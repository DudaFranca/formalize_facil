<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Cadastro Passos</title>
</head>
<body>
	<form action= "add_passos.php" method="POST">
		<label>Número</label>
			<input type="number" name="numero" placeholder="Número" required/> 
		<label>Título</label>
			<input type="text" name="titulo" placeholder="Título" required/> 
		<label>Descrição</label>
			<input type="text" name="descricao" placeholder="Descrição" required/> 
		<input type="submit">
</body>
</html>