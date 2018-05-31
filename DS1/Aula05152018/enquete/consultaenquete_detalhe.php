<?php

require "funcoes.php";
require "config.php";

cabecalho("Consulta enquete");

$consulta= $pdo->prepare("select *, count(*) as total from games group by jogo");

$consulta->execute();

echo '<table width="100%" class="table">
<thead class="thead-default">
<tr>
<th>Título jogo</th>
<th>Total de votos</th>
</tr>';

while ($row = $consulta->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
    <td>$row[jogo]</td>
    <td><img src=\"img/barra.png\" width=\"$row[total]\" height=\"20\">
    $row[total]</td>
    </tr>";
}
echo "</table>";
rodape();
?>