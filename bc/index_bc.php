<?php
session_start();
include('verifica_login.php');
if($_SESSION['nivel'] != 0){
	session_destroy();
	header('Location: ../index.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Bombeiros Comunitários</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../_CSS/estilo.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  </head>

<body onload="pegarMesAtual()">
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style=" backgound-color: #a11">
            <div class="sidebar-header">
                <h3>Bombeiros Comunitários</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Área Administrativa</p>
                <li>
                    <a href="index_bc.php">Início</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Comunitários</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Gerar Escala</a>
                        </li>
                        <li>
                            <a href="#">Valores</a>
                        </li>
                        <li>
                            <a href="#">Gerar Escala</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#">Meu Cadastro</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c32121">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color: #40a1da">
                        <i class="fas fa-align-left"></i>
                        <span>Menu Lateral</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                                <a class="nav-link" href="../logout.php">Sair</a>
                            </li>
                            
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--Inicio da tabela de escala-->
            <section id="secSec">
                <div id="primeiradiv">
                <p> Escolha outro Mês ou ano <input type="date" id="dtdata"> <input type="button" value="Selecionar" onclick="escolherData()"></p>
                </div>
                <br>
                <p><?php
                    $meses = array(
                            '01'=>'Janeiro',
                            '02'=>'Fevereiro',
                            '03'=>'Março',
                            '04'=>'Abril',
                            '05'=>'Maio',
                            '06'=>'Junho',
                            '07'=>'Julho',
                            '08'=>'Agosto',
                            '09'=>'Setembro',
                            '10'=>'Outubro',
                            '11'=>'Novembro',
                            '12'=>'Dezembro'
                        );

                        echo "Mês e ano atual: ".$meses[date('m')]." ".date('Y');

                ?></p>
                <div id="quartadiv">
                    Quarta DIV
                </div>
            <section id="secPcp">
               
            </section>
            <!--Fim da tabela escala-->
            
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
     <script src="GerarCalendarioV4.3.js"></script> 
</body>

</html>