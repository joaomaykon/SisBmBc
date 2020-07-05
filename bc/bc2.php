<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../_CSS/estilo.css">
    <title>Pag BC</title>
</head>
<body>
    <div id ="area"> 
            interaja
    </div>
    <div class="group">
        <div id="DivA"></div>
        <div id="DivLateral"></div>
    </div>
        <div id="DivRodape"></div>
        <div id="sair"><h2><a href="../logout.php">Sair</a></h2></div>
    </div>

    <script>   

let dia = 1
    while( dia < numDias){
        for (let i = 1; i < 8 || dia <= numDias; i++){
            let divisor = document.createElement(`div`)
            divisor.value = `nomeDivX`
            divisor.textContent = `${dia}`
            this.divisor.id = `div${i}`
            divisor.className = `divCalendario`
            secao.appendChild(divisor)
            dia++
            }
        }


        var a = window.document.getElementById('area')
        a.addEventListener('click', clicar)
        a.addEventListener('mouseenter', entrar)
        a.addEventListener('mouseout', sair)
            
            function clicar() {
                a.innerText = 'Clicou!'
                a.style.background = 'red'
            }
            function entrar(){
                a.innerText = "Entrou!"
                a.style.background = 'blue'
            }
            function sair(){
                a.innerText = "Saiu!"
                a.style.background = 'green'
            }
    </script>
    
</body>
</html>