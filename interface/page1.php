<link rel="stylesheet" href="../../bootstrap-4.0.0-beta.2-dist/css/bootstrap.css">
<script src="../../bootstrap-4.0.0-beta.2-dist/js/bootstrap.js"></script>
<script src="../../bootstrap-4.0.0-beta.2-dist/js/jquery-3.2.1.min.js"></script>
<style>
	*{
		margin:0;
		padding: 0;
		box-sizing:border-box;
		background-color: #f5f5f5;
		word-wrap: break-word;
	}
	body{
		
		background-color: #f5f5f5;
	}
	a{
		margin-left: 80%;
		color: black;
		font-size: 15px;
	}
	.jumbotron{
		width: 100%;
		height: 30%;
		background-color:#f5f5f5; 
	}
	.display {
		font-size: 50px;
	
	}
	.lead{
		font-size: 30px;
	}
	h1{

	}
</style>

<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light">
	<h1>Bem Vindo, <?php echo $_SESSION['login']; ?></h1>
<a href="sair.php">Sair</a>
</nav>
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display">Monte agora seus Tutoriais!</h1>
		<p class="lead">A plataforma Do It Yourself permite que você agilize sua vida.</p>
	</div>
</div>