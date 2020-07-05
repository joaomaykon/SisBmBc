<?php
session_start();
include('verifica_login.php');
if($_SESSION['nivel'] != 2){
	session_destroy();
	header('Location: ../index.php');
	exit();
}
?>
<?php
include_once("conexao.consulta.php");
$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

    $sql = "SELECT * FROM `usuarios_bm`  ORDER BY `usuarios_bm`.`antiguidade` ASC";
    $consulta = mysqli_query($conexao,$sql);
    $registros = mysqli_num_rows($consulta);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Consultar BM</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../_CSS/estilo.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style=" backgound-color: #a11">
            <div class="sidebar-header">
                <h3>Administração de Bombeiros Militares</h3>
			</div>

            <ul class="list-unstyled components">
                <p>Opções administrativas</p>
				<li>
                    <a href="paineladm.php">Home</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Comunitários</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Administração de BC's</a>
                        </li>
                        <li>
                            <a href="#">Consultar BC's</a>
                        </li>
                        <li>
                            <a href="#">Validar escala de BC's</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Militares</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Escala de SV</a>
                        </li>
                        <li class="active">
                            <a href="admbm.php">Administração de BM</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#">Outros Dados</a>
                </li>
                <li>
                    <a href="#">Contato dos BC's</a>
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
			<!--Inicio do form-->
			<h2>Consultar Bombeiros</h2>
            <?php
            echo "<table id='consulta'>";
                echo "<tr>";
                echo "<td>Graduação</td>";
                echo "<td>Matrícula</td>";
                echo "<td>Nome de Guerra</td>";
                echo "<td>GU</td>";
                echo "<td>Status</td>";
                echo "</tr>";

                while ($exibirRegistros = mysqli_fetch_array($consulta)){
                    $id = $exibirRegistros[0];
                    $matricula = $exibirRegistros[1];
                    $nomedeguerra = $exibirRegistros[2];
					$nome = $exibirRegistros[3];
					$graduacao = $exibirRegistros[4];
					$antiguidade= $exibirRegistros[5];
					$gu= $exibirRegistros[6];
                    $status= $exibirRegistros[7];
                //}
                echo "<tr>";
                echo "<td>$graduacao</td>";
                echo "<td>$matricula</td>";
                echo "<td>$nomedeguerra</td>";
                echo "<td>$gu</td>";
                if($status == 1){
                    echo "<td>Ativo</td>";

                }else{
                    echo "<td>Afastado</td>";
                }
                echo "</tr>";
                }        
            echo "</table>";
           
            ?>
	        <!--Fim do form-->

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
</body>

</html>