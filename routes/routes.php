<?php

if(isset($_GET['p'])){
    $pag=$_GET['p'];

if($_GET['p'] == 'paginainicial')
    include('content/pages/paginainicial.php');
else if($_GET['p'] == 'F1')
    include('content/pages/F1.php');
else if($_GET['p'] == 'Pilotos')
    include('content/pages/Pilotos.php');
else if($_GET['p'] == 'Classificacao-pilotos')
    include('content/pages/Classificacao/Classificacao-pilotos.php');
else if($_GET['p'] == 'Classificacao-construtores')
    include('content/pages/Classificacao/Classificacao-construtores.php');
else if($_GET['p'] == 'Construtores')
    include('content/pages/Construtores.php');
else if($_GET['p'] == 'Circuito')
    include('content/pages/Circuito.php');
else if($_GET['p'] == 'Pitstop')
    include('content/pages/Pitstop.php');
else if($_GET['p'] == 'PilotosIconicos')
    include('content/pages/PilotosIconicos.php');
else if($_GET['p'] == 'Quizz')
    include('content/pages/Quizz.php');
else
    include ('content/pages/404.php');
}else{
    include('content/pages/paginainicial.php');
}
?>