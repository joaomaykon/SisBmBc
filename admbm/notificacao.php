<?php
session_start();
include('verifica_login.php');
if($_SESSION['nivel'] != 1){
	session_destroy();
	header('Location: ../index.php');
	exit();
}
?>
<?php
include_once("conexao.consulta.php");

    $sql = "SELECT usu_ativo FROM `usuarios_validar` WHERE usu_ativo = 0";
    $consulta = mysqli_query($conexao,$sql);
    $registros = mysqli_num_rows($consulta);

    
     //Passando vetor em forma de json
     echo json_encode($registros);
    
   
?>
//
//while($resultado = mysqli_fetch_assoc($consulta)){
//        $vetor[] = array_map('utf8_encode', $resultado);
//    }
//*/