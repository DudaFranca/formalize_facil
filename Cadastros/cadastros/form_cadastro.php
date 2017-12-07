<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<script src="../../materialize/js/jquery-3.2.1.min.js"></script>
	<script src="../../materialize/js/materialize.js"></script>
	<link rel="stylesheet" href="../../materialize/css/materialize.css">
	<link rel="stylesheet" href="../../materialize/css/style.css">
</head>
<body>
	<!--MENU-->
	<nav>
		<div class="nav-wrapper black">
			<a href="../../index.php" class="brand-logo">Do It Yourself</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="login2.php">Login</a></li>
				<li><a href="form_cadastro.php">Cadastro</a></li>
				<?php
				    if($_SESSION["logado"] == true):?>
				        <li><a href="form_tutorial.php">Tutorial</a></li>
				        <li><a href="form_passos.php">Passos</a></li>
				<?php endif ?>
			</ul>
		</div>
	</nav>
		<!-- FIM MENU-->
	<form action="add_cadastro.php" method="POST">
		<div class="container" id="cadastros">
			<div class="row">
			<br>
			<br>
				<div class="col s12">
					<h1>Nome</h1>
					<form action="">
						<div class="input-field">
							<input type="text" name="nome" placeholder="Nome" required/>
						</div>
						<h1>Senha</h1>
						<div class="input-field">
							<input type="password" name="senha" placeholder="Senha" required/> 
						</div>
						<h1>Login</h1>
					<form action="">
						<div class="input-field">
							<input type="text" name="login" placeholder="Login" required/> 
						</div>
						<h1>Telefone</h1>
					<form action="">
						<div class="input-field">
							<input type="text" name="telefone" placeholder="Telefone" required/>
						</div>
						<h1>Email</h1>
					<form action="">
						<div class="input-field">
							<input type="text" name="email" placeholder="Email" required/> 
						</div>
						<!--botão de enviar-->
						<div class="btn waves-effect waves-light black">
							<input type="submit" value="Enviar">
						</div>
					</form>
				</div>
			</div>
		</form>
	</div>
</body>
</html>