<?php 
session_start();

$id = $_GET['id'];
unset($_SESSION['cadastro'][$id]);
header('location:cadastro.php');
?>
