<?php 
	session_start();

$login= $_POST['login'];
$senha= $_POST['senha'];

array_push($_SESSION['login'],[$login, $senha]);

header('location:login.php');

?>