<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="../../bootstrap-4.0.0-beta.2-dist/css/bootstrap.css">
	<script src="../../bootstrap-4.0.0-beta.2-dist/js/bootstrap.js"></script>
	<script src="../../bootstrap-4.0.0-beta.2-dist/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="row">
		<div class="centraliza">
			<form action="login.php" method="POST">
				<div style="margin:0 ;padding:0 ; display: inline;">
					<div class="">
						<h1>Do It Yourself</h1>
					</div>
					<div class="auth-form-body mt-4">
						<label for="">Login</label>
						<input class="form-control input-block col-xs-5" type="text"  name="login" placeholder="Login">
						<label for="">Senha</label>
						<input class="form-control input-block col-xs-5" type="password" name="senha" placeholder="Senha">
						<input class="btn btn-primary btn-block col-xs-5" type="submit" value="Entrar" id="botao">
					</div>
				</div>
			</div>
		</div>
	</form>
</body>	
</html>