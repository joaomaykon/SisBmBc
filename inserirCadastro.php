<?php
session_start();
include('conexao.php');
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];


if(empty($_POST['nome']) || empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email'])) {
	echo "<script>alert(`Preencha todos os campos`);window.location='cadastrar.php'</script>"; 
	exit();
}else{
    $query = mysqli_query($conexao, "SELECT 'usu_usuario', 'usu_email' FROM usuarios_validar WHERE usu_usuario = '$usuario' AND usu_email= '$email'");
    $row = mysqli_num_rows($query);
        if($row == 1) {
            echo "<script>alert(`Já existe este cadastro`);window.location='index.php'</script>"; 
            exit();
        }else{
            $query = mysqli_query($conexao, "INSERT INTO `usuarios_validar`(`usu_nome`, `usu_usuario`, `usu_senha`, `usu_email`) VALUES ('$nome','$usuario','$senha','$email')");
            if($query == true){
                echo "<script>alert(`Cadastro inserido com sucesso, aguarde email de liberação`);window.location='index.php'</script>"; 
            }else{
            echo "<script>alert(`Ocorreu algum erro`);window.location='cadastrar.php'</script>"; 
            }
        }
    }        
?>