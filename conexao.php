<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'maykon');
define('SENHA', 'maykon');
define('DB', 'bd_sisbmbc');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');