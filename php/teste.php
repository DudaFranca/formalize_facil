<?php
session_start(); 
$email= $_POST['email'];
$senha= $_POST['senha'];


if ($email && $senha == $_SESSION['cadastro']){
	header('location:passo1.php');
}

else {
	header('location:add.php');
}


?>