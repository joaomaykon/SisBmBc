<?php
session_start();
include('../conexao.php');
//$id_tbl = $_POST['idtbl[0]'];
$idtd = $_POST['id_tbtd'];
echo "<script>alert($idtd);window.location='liberarusuarios.php'</script>";
/*
    $query = mysqli_query($conexao, "UPDATE `usuarios_validar` SET `usu_ativo`= 1 WHERE id = $idtd");
    $row = mysqli_num_rows($query);
    if($row == 1) {
        echo "<script>alert(`Usuario liberado com sucesso`);window.location='liberarusuarios.php'</script>"; 
        exit();
    }else{
        echo "<script>alert(`Usuario não liberado ${idtd}`);window.location='liberarusuarios.php'</script>"; 
        exit();
    }
  */         
?>