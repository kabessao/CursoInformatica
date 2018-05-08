<?php
require "funcoes.php";
cabecalho("Adicionando nome...");

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];


$fp = fopen("nomes.txt","a+");
fwrite($fp, "\n$codigo $nome $sobrenome");

fclose($fp);

echo "Nome adicionado";
rodape();
header("Refresh:1;URL= arquivo_leitura.php");
?>