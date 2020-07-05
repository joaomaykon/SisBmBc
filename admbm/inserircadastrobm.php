<?php
session_start();
include('../conexao.php');
$matricula = $_POST['matricula'];
$nomedeguerra = $_POST['nomedeguerra'];
$nomecompleto = $_POST['nomecompleto'];
$graduacao = $_POST['graduacao'];
$antiguidade = $_POST['antiguidade'];
$gu = $_POST['gu'];
$status = $_POST['status'];

if(empty($_POST['matricula']) || empty($_POST['nomedeguerra'])) {
	echo "<script>alert(`Preencha todos os campos`);window.location='inserircadastrobm.php'</script>"; 
	exit();
}else{
    $query = mysqli_query($conexao, "SELECT 'matricula' FROM usuarios_bm WHERE matricula = '$matricula'");
    $row = mysqli_num_rows($query);
        if($row == 1) {
            echo "<script>alert(`Já existe este cadastro`);window.location='admbm.php'</script>"; 
            exit();
        }else{
            $query = mysqli_query($conexao, "INSERT INTO `usuarios_bm`(`matricula`, `nome_guerra`, `nome`, `graducao`, `antiguidade`
                , `gu`, `status`) 
                VALUES ('$matricula','$nomedeguerra','$nomecompleto','$graduacao','$antiguidade','$gu','$status')");
            if($query == true){
                echo "<script>alert(`Cadastro inserido com sucesso`);window.location='admbm.php'</script>"; 
            }else{
            echo "<script>alert(`Ocorreu algum erro`);window.location='admbm.php'</script>"; 
            }
        }
    }        
?>