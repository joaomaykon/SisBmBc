<?php
session_start();
include('verifica_login.php');
if($_SESSION['nivel'] != 2){
	session_destroy();
	header('Location: ../index.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supervisor</title>
</head>
<body>
    Painel supervisor
    <h2><a href="../logout.php">Sair</a></h2>
</body>
</html>