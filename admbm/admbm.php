<?php
session_start();
include('verifica_login.php');
if($_SESSION['nivel'] != 1){
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

    <title>Cadastro BM</title>

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
                    <a href="index_adm.php">Home</a>
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
						<li>
                            <a href="liberarusuarios.php">Liberar Acesso</a>
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
						<li class="active">
                            <a href="consultabombeiros.php">Consultar Bombeiros</a>
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
			<h2>Cadastro de bombeiro Militar</h2>
			<br>
			<fieldset class="border p-2">
			<legend  class="w-auto">Cadastro</legend>
			<form action="inserircadastrobm.php" method="POST">
				<div class="form-row">
						<div class="col-md-2 mb-3">
							<label for="txtmatricula">Matrícula</label>
							<input type="number" class="form-control"  name="matricula" id="txtmatricula" placeholder="Somente números" required>
						</div>
						<div class="col-md-3 mb-3">
							<label for="txtnomeguerra">Nome de Guerra</label>
							<input type="text" class="form-control"  name="nomedeguerra" id="txtnomeguerra" placeholder="Nome de guerra" required>
						</div>
						<div class="col-md-4 mb-3">
							<label for="txtnomecompleto">Nome completo</label>
							<input type="text" class="form-control" name="nomecompleto" id="txtnomecompleto" placeholder="Nome Completo" required>
						</div>
				</div>
				<div class="form-row">
					<div class="col-md-2 mb-3">
							<label for="selgraduacao">Graduação</label>
							<select class="custom-select" name="graduacao" id="selgraduacao">
								<option selected>Gradução</option>
								<option value="st">SubTenente</option>
								<option value="1sgt">1º Sgt</option>
								<option value="2sgt">2º Sgt</option>
								<option value="3sgt">3º Sgt</option>
								<option value="cb">CB</option>
								<option value="sd">SD</option>
							</select>
					</div>
					<div class="col-md-3 mb-3">
										<label for="txtantiguidade">Antiguidade</label>
										<input type="number" class="form-control" name="antiguidade" id="txtantiguidade" placeholder="20=Sgt, 30=Cb e 40=Sd" required>
					</div>
					<div class="col-md-2 mb-3">
							<label for="selgu">Guarnição</label>
							<select class="custom-select" name="gu" id="selgu">
								<option selected>Guarnição</option>
								<option value="a">A</option>
								<option value="b">B</option>
								<option value="c">C</option>
								<option value="ex">Expediente</option>
							</select>
					</div>
				</div>
				<div class="form-row">
						<div class="col-md-2 mb-3">
								<label for="selstatus">Status</label>
								<select class="custom-select" name="status" id="selstatus">
									<option value="1" selected>Ativo</option>
									<option value="0">Férias/outros</option>
								</select>
						</div>
				
				</div>
				
			<button class="btn btn-primary" type="submit">Enviar</button>
		</div>
	</form>
	<!--Fim do form-->

			</fieldset>
			
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