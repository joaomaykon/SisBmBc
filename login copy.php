<?php
session_start();
include('conexao.php');
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

//verifica se o usuario está cadastrado
$query = mysqli_query($conexao, "SELECT 'usu_usuario', 'usu_senha', 'usu_nivel', 'usu_ativo' FROM usuarios_validar WHERE usu_usuario = '$usuario' AND usu_senha= '$senha'");
$row = mysqli_num_rows($query);


if($row == 1) {
	//verifica qual nível e estatus do usuario
	$sql_nivel = mysqli_query($conexao, "SELECT `usu_nivel`, `usu_ativo` FROM `usuarios_validar` WHERE usu_usuario='$usuario'");
	$nivel = mysqli_fetch_array($sql_nivel);
	$_SESSION['nivel'] = $nivel[0];
	$_SESSION['ativo'] = $nivel[1];
	
	if($nivel[1] == 1){
		if($nivel[0] == 0){
			$_SESSION['usuario'] = $usuario;
			header('Location: bc/bc.php');
			exit();
		}elseif(($nivel[0] == 1)){
			$_SESSION['usuario'] = $usuario;
			$_SESSION['nivel'] = $nivel[0];
			header('Location: admbm/paineladm.php');
			exit();
		}elseif(($nivel[0] == 2)){
			$_SESSION['usuario'] = $usuario;
			$_SESSION['nivel'] = $nivel[0];
			header('Location: sup/painelsup.php');
			exit();

		}else{
			$_SESSION['nao_autenticado'] = true;
			header('Location: index.php');
			exit();	
		}
	
	}else{
		echo "<script>alert(`Usuário ${usario} ainda não liberado`);window.location='index.php'</script>"; 
}
		
} else{
	$_SESSION['nao_autenticado'] = true;
	echo ("<script>alert('Login ou senha incorreto'); location.href='index.php';</script>");
	exit();
}
?>