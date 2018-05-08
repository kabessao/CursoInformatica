<?php
    require "funcoes.php";
    cabecalho("Logout");
    @session_start();
    session_destroy();
    echo "<h1>Sessão encerrada!</h1>";
    rodape();
    header("Refresh: 2; URL=index.php");
?>
