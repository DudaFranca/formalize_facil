<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Login</title>
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
	<form action="passo1.php" method="POST">
		<input type="text" name="login" placeholder="Login"><br>
		<input type="password" name="senha" placeholder="Senha"><br>
		<input type="submit" value="Login"> 
	</form>
</body>
</html>