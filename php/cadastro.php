		<?php 
		session_start();
		if (!isset($_SESSION['cadastro'])) {
			$_SESSION['cadastro'] = array();
		}
		$cad = $_SESSION['cadastro'];
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<title>Cadastro</title>
			<style type="text/css">
			body{	
				background: #E6E6FA;
			}

			input{
				font-size: 50px;
				font-family: 'Pacifico', cursive;
				color: #DB7093;
				padding: 10px 20px 20px;
			}

			title{
				font-family: 'Arvo', serif;
			}

			#wrap{
				width: 1000px;
				margin:auto;
				background: #F5FFFA;
			}
		</style>
	</head>
	<body>
		<form action="cadastrando.php" method="POST">
			<input type="text" name="nome" placeholder="Nome" ><br>
			<input type="text" name="sobrenome" placeholder="Sobrenome"><br>
			<input type="text" name="email" placeholder="E-mail"><br>
			<input type="text" name="login" placeholder="Login"><br>
			<input type="password" name="senha" placeholder="Senha"><br>
			<input type="submit" value="Cadastrar">
		</form>
	</body>
	</html>