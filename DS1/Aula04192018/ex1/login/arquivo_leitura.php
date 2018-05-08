<?php
require "funcoes.php";
cabecalho("lendo arquivos");
$id_arquivo = fopen('nomes.txt','r');

while (!feof($id_arquivo)){
    $linha = fgets($id_arquivo, 4096);
    echo "<p>$linha</p>";
}
fclose($id_arquivo);
rodape();

?>