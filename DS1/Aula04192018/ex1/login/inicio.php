<?php
require "funcoes.php";

session_start();
if(!isset($_SESSION['nome'])){
	header("Location: index.php");
	}
cabecalho("Tela inicial");
echo "<h3>Ola Mundo!<b3>";
rodape();
?>
